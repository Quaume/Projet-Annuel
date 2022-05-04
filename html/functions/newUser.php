<?php
session_start();

require "functions.php";



//Est-ce que je recois ce que j'ai demandé

if(
	!isset($_POST["username"]) ||
	!isset($_POST["email"]) ||
	!isset($_POST["birthday"]) ||
	!isset($_POST["password"]) ||
	!isset($_POST["passwordConfirm"]) ||
	!isset($_POST["accountType"]) ||
	!isset($_POST["captcha"]) ||
	!isset($_POST["cgu"]) ||

	count($_POST)!=8
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
$captcha = $_POST["captcha"];
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


if(count($errors) == 0){

	$queryPrepared = $pdo->prepare("INSERT INTO utrackpa_users (username, email, birthday, pwd, accountType) 
		VALUES (:username, :email, :birthday, :pwd, :accountType);");


	$pwd = password_hash($pwd, PASSWORD_DEFAULT);
	
	$queryPrepared->execute([
								"username"=>$username,
								"email"=>$email,
								"birthday"=>$birthday,
								"pwd"=>$pwd,
								"accountType"=>$accountType
							]);

	header("Location: ../LR_SESSIONS/signIn.php");	

}else{
	
	$_SESSION['errors'] = $errors;
	header("Location: ../LR_SESSIONS/signUp.php");
}


//Si aucune erreur insérer l'utilisateur en base de données puis rediriger sur la page de connexion


//Si il y a des erreurs rediriger sur la page d'inscription et afficher les erreurs

