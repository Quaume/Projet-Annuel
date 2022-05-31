<?php
require "config.inc.php";
session_start();

function connectDB(){
	//création d'une nouvelle connexion à notre bdd
	try{
		
		$pdo = new PDO( DB_DRIVER.":host=".DB_HOST.";dbname=".DB_NAME.";port=".DB_PORT , DB_USER , DB_PWD );
		
    	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


	}catch(Exception $e){
		die("Erreur BDD ".$e->getMessage());
	}


	return $pdo;
}

/*
	$token = createToken();
	updateToken($results["id"], $token);
*/

function createToken(){
	$token = sha1(md5(rand(0,100)."gdgfm432").uniqid());
	return $token;
}


function updateToken($userId, $token){

	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("UPDATE utrackpa_users SET token=:token WHERE id=:id");
	$queryPrepared->execute(["token"=>$token, "id"=>$userId]);

}


function isConnected(){

	if(!isset($_SESSION["email"]) || !isset($_SESSION["token"])){
		return false;
	}

	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT id FROM utrackpa_users WHERE email=:email AND token=:token");	
	$queryPrepared->execute(["email"=>$_SESSION["email"], "token"=>$_SESSION["token"]]);

	return $queryPrepared->fetch();

}

/* User Informations */

// All Users 

function getAllUsers(){
	
	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT * FROM utrackpa_users");	
	$queryPrepared->execute();
	
	return $queryPrepared->fetchAll();
}


// Username
function getUserUsername(){

	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT username FROM utrackpa_users WHERE token=:token");	
	$queryPrepared->execute(["token"=>$_SESSION["token"]]);
	
	return $queryPrepared->fetch()[0];

}

// Birthday
function getUserBirthday(){

	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT birthday FROM utrackpa_users WHERE token=:token");	
	$queryPrepared->execute(["token"=>$_SESSION["token"]]);
	
	return $queryPrepared->fetch()[0];

}

// Id
function getUserId(){

	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT id FROM utrackpa_users WHERE token=:token");	
	$queryPrepared->execute(["token"=>$_SESSION["token"]]);
	
	return $queryPrepared->fetch()[0];

}
//img_profile
function getUserImg(){
	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT img_profile FROM utrackpa_users WHERE token=:token");
	$queryPrepared->execute(["token"=>$_SESSION["token"]]);

	return $queryPrepared->fetch()[0];
}
// AccountType
function getUserAccountType(){

	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT accountType FROM utrackpa_users WHERE token=:token");	
	$queryPrepared->execute(["token"=>$_SESSION["token"]]);
	
	return $queryPrepared->fetch()[0];

}

// Email
function getUserEmail(){

	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT email FROM utrackpa_users WHERE token=:token");	
	$queryPrepared->execute(["token"=>$_SESSION["token"]]);
	
	return $queryPrepared->fetch()[0];

}

// Date Inserted
function getUserDateInserted(){

	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT dateInserted FROM utrackpa_users WHERE token=:token");	
	$queryPrepared->execute(["token"=>$_SESSION["token"]]);
	
	return $queryPrepared->fetch()[0];

}

// Date Updated
function getUserDateUpdated(){

	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT dateUpdated FROM utrackpa_users WHERE token=:token");	
	$queryPrepared->execute(["token"=>$_SESSION["token"]]);
	
	return $queryPrepared->fetch()[0];

}

// Verified
function getUserVerified(){

	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT verified FROM utrackpa_users WHERE token=:token");	
	$queryPrepared->execute(["token"=>$_SESSION["token"]]);
	
	if($queryPrepared->fetch()[0] == 1){
		return(
			"Your account has been verified"
		);
	} else if ($queryPrepared->fetch() == 0){
		return(
			"Your account must be verified"
		);
	} else {
		return(
			"What are you doing with our website ?"
		);
	}

}


///// FOLLOWS /////

//Recupe tous follows
function getFollows(){

	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT * FROM utrackpa_followers");	
	$queryPrepared->execute();
	
	return $queryPrepared->fetchAll();

}

//Recup followers user connecté
function getUserFollowers($user){

	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT * FROM utrackpa_followers WHERE followed = '$user'");	
	$queryPrepared->execute();
	
	return $queryPrepared->fetchAll();

}

//Recupe followed user connecté
function getUserFollowed($user){

	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT followed FROM utrackpa_followers WHERE follower = '$user'");	
	$queryPrepared->execute();
	
	return $queryPrepared->fetchAll();

}

//Verif si user follow ou pas
function isUserFollowed($user,$followed){

	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT follower FROM utrackpa_followers WHERE follower = '$user' AND followed = '$followed'");	
	$queryPrepared->execute();
	
	return $queryPrepared->fetch();

}



///// NewsLetter /////

//Recup liste abonnés newsletter
function getSubscribedToNewsletter(){

	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT email FROM utrackpa_newsletter");	
	$queryPrepared->execute();
	
	return $queryPrepared->fetchAll();

}

//Verif si user abonné ou pas
function isSubscribedToNewsletter(){

	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT 'email' FROM utrackpa_newsletter WHERE email = '".getUserEmail()."'");	
	$queryPrepared->execute();
	
	return $queryPrepared->fetch();

}

function isAdmin(){

	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT 'username' FROM utrackpa_admins WHERE username = '".getUserUsername()."'");	
	$queryPrepared->execute();
	
	return $queryPrepared->fetch();

}
