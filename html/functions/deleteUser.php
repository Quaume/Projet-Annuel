<?php
require "functions.php";


//Vérification de l'utilisateur
$id = $_GET["id"];
if(!isConnected()){
	die("Il faut se connecter !!!");
}

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