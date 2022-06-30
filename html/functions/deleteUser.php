<?php
require "functions.php";

if(isAdmin()){
//Vérification de l'utilisateur
$id = $_GET["id"];

//Suppression du user en bdd
$pdo = connectDB();

// Suppression table users
$queryPrepared = $pdo->prepare("DELETE FROM utrackpa_users WHERE id=:id");
$queryPrepared->execute(["id"=>$id]);

// Suppression table followers followed
$queryPrepared = $pdo->prepare("DELETE FROM utrackpa_followers WHERE followed=:id");
$queryPrepared->execute(["followed"=>$id]);

// Suppression table followers followers
$queryPrepared = $pdo->prepare("DELETE FROM utrackpa_followers WHERE follower=:id");
$queryPrepared->execute(["follower"=>$id]);

// Suppression table albums
$queryPrepared = $pdo->prepare("DELETE FROM utrackpa_albums WHERE artist=:id");
$queryPrepared->execute(["artist"=>$id]);

// Suppression table favoris_track artist
$queryPrepared = $pdo->prepare("DELETE FROM utrackpa_favoris_track WHERE artist=:id");
$queryPrepared->execute(["artist"=>$id]);

// Suppression table favoris_track id_user
$queryPrepared = $pdo->prepare("DELETE FROM utrackpa_favoris_track WHERE id_user=:id");
$queryPrepared->execute(["id_user"=>$id]);

// Suppression table forum
$queryPrepared = $pdo->prepare("DELETE FROM utrackpa_forum WHERE id_usr=:id");
$queryPrepared->execute(["id_user"=>$id]);

// Suppression table requests requested
$queryPrepared = $pdo->prepare("DELETE FROM utrackpa_users_requests WHERE requestedUser=:id");
$queryPrepared->execute(["requestedUser"=>$id]);

// Suppression table requests requesting
$queryPrepared = $pdo->prepare("DELETE FROM utrackpa_users_requests WHERE requestingUser=:id");
$queryPrepared->execute(["requestingUser"=>$id]);

// Suppression table forum_comments
$queryPrepared = $pdo->prepare("DELETE FROM utrackpa_forum_comments WHERE usr_id=:id");
$queryPrepared->execute(["usr_id"=>$id]);

// Suppression table newsletter
$queryPrepared = $pdo->prepare("DELETE FROM utrackpa_newsletter WHERE emailid=:id");
$queryPrepared->execute(["emailid"=>$id]);

// Suppression table tracks
$queryPrepared = $pdo->prepare("DELETE FROM utrackpa_tracks WHERE artist=:id");
$queryPrepared->execute(["artist"=>$id]);



//Si c'est le user actuellement connecté je le deco
if ($_SESSION['id'] == $id){
	header("Location: ./logout.php");
}else{
    header("Location: ./testback.php");
}
}else{
	if(isConnected()){
		header("Location: ../templates/Home/Home.php");
	}else{
		header("Location: ../index.php");
	}
}

