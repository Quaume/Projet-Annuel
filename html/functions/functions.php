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
	$queryPrepared = $pdo->prepare("SELECT username, accountType, dateInserted, img_profile FROM utrackpa_users");	
	$queryPrepared->execute();
	
	return $queryPrepared->fetchAll();
}

//Bio 
function getUsrBioById($id){
	$pdo = connectDB();

	$queryPrepared = $pdo->prepare("SELECT bio FROM utrackpa_users WHERE id=:id");
	$queryPrepared->execute(["id"=>$id]);

	return $queryPrepared->fetch()[0];
}

// Username
function getUserUsernameById($id){

	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT username FROM utrackpa_users WHERE id=:id");	
	$queryPrepared->execute(["id"=>$id]);
	
	return $queryPrepared->fetch()[0];

}

// Birthday
function getUserBirthdayById($id){

	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT birthday FROM utrackpa_users WHERE id=:id");	
	$queryPrepared->execute(["id"=>$id]);
	
	return $queryPrepared->fetch()[0];

}

// Id
function getUserId(){

	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT id FROM utrackpa_users WHERE token=:token");	
	$queryPrepared->execute(["token"=>$_SESSION["token"]]);
	
	return $queryPrepared->fetch()[0];

}

// Id by user username
function getUserIdByUsername($username){

	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT id FROM utrackpa_users WHERE username=:username");	
	$queryPrepared->execute(["username"=>$username]);
	
	return $queryPrepared->fetch()[0];

}


//img_profile
function getUserImgById($id){
	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT img_profile FROM utrackpa_users WHERE id=:id");
	$queryPrepared->execute(["id"=>$id]);

	return $queryPrepared->fetch()[0];
}

// AccountType
function getUserAccountTypeById($id){

	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT accountType FROM utrackpa_users WHERE id=:id");	
	$queryPrepared->execute(["id"=>$id]);
	
	return $queryPrepared->fetch()[0];

}

// Email
function getUserEmailById($id){

	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT email FROM utrackpa_users WHERE id=:id");	
	$queryPrepared->execute(["id"=>$id]);
	
	return $queryPrepared->fetch()[0];

}

// Date Inserted
function getUserDateInsertedById($id){

	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT dateInserted FROM utrackpa_users WHERE id=:id");	
	$queryPrepared->execute(["id"=>$id]);
	
	return $queryPrepared->fetch()[0];

}

// Date Updated
function getUserDateUpdatedById($id){

	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT dateUpdated FROM utrackpa_users WHERE id=:id");	
	$queryPrepared->execute(["id"=>$id]);
	
	return $queryPrepared->fetch()[0];

}

// Verified
function getUserVerifiedById($id){

	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT verified FROM utrackpa_users WHERE id=:id");	
	$queryPrepared->execute(["id"=>$id]);
	
	return $queryPrepared->fetch()[0];

}

// Verif si admin
function isAdmin(){

	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT 'username' FROM utrackpa_admins WHERE username = '".getUserId()."'");	
	$queryPrepared->execute();
	
	return $queryPrepared->fetch();

}



///// FOLLOWS /////

//Recup tous follows
function getFollows(){

	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT * FROM utrackpa_followers");	
	$queryPrepared->execute();
	
	return $queryPrepared->fetchAll();

}

//Recup followers user connecté
function getUserFollowers($user){

	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT follower FROM utrackpa_followers WHERE followed = '$user'");	
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
	$queryPrepared = $pdo->prepare("SELECT 'follower' FROM utrackpa_followers WHERE follower = '$user' AND followed = '$followed'");	
	$queryPrepared->execute();
	
	return $queryPrepared->fetch();

}



///// NewsLetter /////

//Recup liste abonnés newsletter
function getSubscribedToNewsletter(){

	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT emailid FROM utrackpa_newsletter");	
	$queryPrepared->execute();
	
	return $queryPrepared->fetchAll();

}

//Verif si user abonné ou pas
function isSubscribedToNewsletter(){

	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT 'emailid' FROM utrackpa_newsletter WHERE emailid = '".getUserId()."'");	
	$queryPrepared->execute();
	
	return $queryPrepared->fetch();

}



///// Tracks /////

//Recup toutes tracks user par id
function getUserTracksById($id){

	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT * FROM utrackpa_tracks WHERE artist = '$id'");	
	$queryPrepared->execute();
	
	return $queryPrepared->fetchAll();

}

function getRecentUserTracksById($id){

	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT * FROM utrackpa_tracks WHERE artist = '$id' ORDER BY dateOfRelease DESC LIMIT 0,3");	
	$queryPrepared->execute();
	
	return $queryPrepared->fetchAll();

}

// All username
function getAllTracks(){
	
	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT id,title,artist,category,dateOfRelease,img_profile FROM utrackpa_tracks");	
	$queryPrepared->execute();
	
	return $queryPrepared->fetchAll();
}

function getImgTrackById($id){
	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT img_profile FROM utrackpa_tracks WHERE id=:id");
	$queryPrepared->execute(["id"=>$id]);

	return $queryPrepared->fetch()[0];
}