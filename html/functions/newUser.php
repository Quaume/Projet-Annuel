<?php
session_start();

require "functions.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Est-ce que je recois ce que j'ai demandé

if(
	!isset($_POST["username"]) ||
	!isset($_POST["email"]) ||
	!isset($_POST["birthday"]) ||
	!isset($_POST["password"]) ||
	!isset($_POST["passwordConfirm"]) ||
	!isset($_POST["accountType"]) ||
	!isset($_POST["cgu"]) ||

	count($_POST)!=7
){

	die("Invalid form !");

}

//récupérer les données du formulaire
$username = $_POST["username"];
$email = $_POST["email"];
$birthday = $_POST["birthday"];
$pwd = $_POST["password"];
$pwdConfirm = $_POST["passwordConfirm"];
$accountType = $_POST["accountType"];
$cgu = $_POST["cgu"];



//nettoyer les données

$email = strtolower(trim($email));
$username = ucwords(strtolower(trim($username)));
$accountType = strtolower(trim($accountType));

//vérifier les données
$errors = [];

//Email OK
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	$errors[] = "Email is not valid";
}else{

	//Vérification l'unicité de l'email
	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT id from utrackpa_users WHERE email=:email");

	$queryPrepared->execute(["email"=>$email]);
	
	if(!empty($queryPrepared->fetch())){
		$errors[] = "An account already exists with this email";
	}


}


//username : Min 4 Max 60
if( strlen($username)<4 || strlen($username)>20 ){
	$errors[] = "Username must be between 4 and 20 characters";
}

	// Vérification unicité de username
	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT id from utrackpa_users WHERE username=:username");

	$queryPrepared->execute(["username"=>$username]);
	
	if(!empty($queryPrepared->fetch())){
		$errors[] = "This username is already taken";
	}

//Date anniversaire : YYYY-mm-dd
//entre 16 et 100 ans
$birthdayExploded = explode("-", $birthday);

if( count($birthdayExploded)!=3 || !checkdate($birthdayExploded[1], $birthdayExploded[2], $birthdayExploded[0])){
	$errors[] = "Birthday is not valid";
}else{
	$age = (time() - strtotime($birthday))/60/60/24/365.2425;
	if($age < 16 || $age > 100){
		$errors[] = "Your age do not allow you to sign up";
	}
}


//Mot de passe : Min 8, Maj, Min et chiffre
if(strlen($pwd) < 8 ||
preg_match("#\d#", $pwd)==0 ||
preg_match("#[a-z]#", $pwd)==0 ||
preg_match("#[A-Z]#", $pwd)==0 
) {
	$errors[] = "Password must be at least 8 characters long with at least a capital letter and a number";
}


//Confirmation : égalité
if( $pwd != $pwdConfirm){
	$errors[] = "Passwords does not match";
}

if(count($errors) != 0){
	$_SESSION['errors'] = $errors;
	header("Location: ../LR_SESSIONS/signUp.php");
	
}else{
	$userKey = rand(100000,999999);
	$queryPrepared = $pdo->prepare("INSERT INTO utrackpa_users(username, email, birthday, pwd, accountType,userKey) VALUES (:username, :email, :birthday, :pwd, :accountType, :userKey);");
	
	$pwd = password_hash($pwd, PASSWORD_DEFAULT);
	
	$queryPrepared->execute(
		["username"=>$username,
		"email"=>$email,
		"birthday"=>$birthday,
		"pwd"=>$pwd,
		"accountType"=>$accountType,
		"userKey"=>$userKey]
	);
	/*=======================FONCTION PHP MAILER=====================================*/
		function sendConfirmMail($to, $UserKey, &$errors){
			$mail = new PHPMailer(true);

			try {
				//Server settings
				$mail->isSMTP();                                            
				$mail->Host       = 'smtp.gmail.com';                     
				$mail->SMTPAuth   = true;                                   
				$mail->Username   = 'Utrack';                     
				$mail->Password   = 'utrack.off@gmail.com';                               
				$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
				$mail->Port       = 465;                                   

				//Recipients
				$mail->setFrom('utrack.off@gmail.com', 'Utrack');
				$mail->addAddress($to);                                 

				//Content
				$mail->isHTML(true);                                 
				$mail->Subject = 'utrack confirmation e-mail !';
				$mail->Body    = 'Click on the link to confirm your email.<br><a href="http://localhost:7777/Projet-Annuel/html/LR_SESSIONS/signIn.php?userKey='.$userKey.'">Confirmation link</a>';
				$mail->send();
			} catch (Exception $e) {
				$errors[] = 'Failed to send email, please try again.';
			}
		}
	/*============================================================*/

	sendConfirmMail($email, $userKey, $errors);

	if (count($errors) != 0) {
        $_SESSION['errors'] = $errors;
    }
    else 
    {
        //$_SESSION['verified'] = 1;
    }
	header("Location: ../LR_SESSIONS/signIn.php");
}
