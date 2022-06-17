<?php
require "php-config/config.inc.php";
//================================================\\

session_start();


function connectDB(){
	//création d'une nouvelle connexion à notre bdd
	try{
		
		$pdo = new PDO( DB_DRIVER.":host=".DB_HOST.";dbname=".DB_NAME.";port=".DB_PORT , DB_USER , DB_PWD );
		
    	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


	}catch(Exception $e){
		die("Error BDD ".$e->getMessage());
	}


	return $pdo;
}

$pdo = connectDB();
function isConnected($pdo)
{
    // Check if a user is connected or no.

    // Args:
    //     pdo (PDO): The instance of PDO.

    if (!isset($_SESSION["email"]) || !isset($_SESSION["token"])) {
        return false;
    }
    $queryPrepared = $pdo->prepare("SELECT id FROM utrackpa_users WHERE email=:email AND token=:token");
    $queryPrepared->execute(["email" => $_SESSION["email"], "token" => $_SESSION["token"]]);
    if ($queryPrepared->fetch()) {
        return true;
    }
    return false;
}
if(!isConnected($pdo)){

    header("Location: ../../index.php");

}
//get Id
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
// Username by user Id
function getUserUsernameById($id){

	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT username FROM utrackpa_users WHERE id=:id");	
	$queryPrepared->execute(["id"=>$id]);
	
	return $queryPrepared->fetch()[0];

}
function getUserImg(){
	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT img_profile FROM utrackpa_users WHERE token=:token");
	$queryPrepared->execute(["token"=>$_SESSION["token"]]);

	return $queryPrepared->fetch()[0];
}

//img_profile by user Id
function getUserImgByUserId($id){
	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT img_profile FROM utrackpa_users WHERE id=:id");
	$queryPrepared->execute(["id"=>$id]);

	return $queryPrepared->fetch()[0];
}

// get Username;
function getUserUsername(){

	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT username FROM utrackpa_users WHERE token=:token");	
	$queryPrepared->execute(["token"=>$_SESSION["token"]]);
	
	return $queryPrepared->fetch()[0];

}
$_SESSION['id'];

//get user all post
function getAllPosts(){
	
	$pdo = connectDB();
	$user_id = getUserId($pdo);
	
	$queryPrepared = $pdo->prepare("SELECT * FROM utrackpa_forum ORDER BY id DESC");	
	$queryPrepared->execute();
	
	return $queryPrepared->fetchAll();

	$errors = 'No posts found';
}

function getPostId(){
	$pdo = connectDB();
	
	$queryPrepared = $pdo->prepare("SELECT * FROM utrackpa_forum");
	$queryPrepared->execute();

	$result = $queryPrepared->fetchAll()[0];
	return $result;
}