<?php


$pdo = connectDB();

if(!isConnected($pdo)){

    header("Location: ../../index.php");

}

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