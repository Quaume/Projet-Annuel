<?php
require "functions.php";

if(isAdmin()){
//Vérification de l'utilisateur
$id = $_GET["id"];

//Suppression du user en bdd
$pdo = connectDB();
$queryPrepared = $pdo->prepare("DELETE FROM utrackpa_users WHERE id=:id");
$queryPrepared->execute(["id"=>$id]);

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

