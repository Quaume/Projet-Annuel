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

function getUserImg(){
	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT img_profile FROM utrackpa_users WHERE token=:token");
	$queryPrepared->execute(["token"=>$_SESSION["token"]]);

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
/*
//FORUM FUNCTION POST
function usrPost(){
	if (isset($_POST['submit'])){
	
		if(!empty($_POST['title']) && !empty($_POST['category']) && !empty($_POST['content']) && !empty($_POST['sub_category'])){
			$pdo = connectDB();
	
			$title = htmlspecialchars($_POST['title']);
			$category = $_POST['category'];
			$sub_category= $_POST['sub_category'];
			$content = nl2br(htmlspecialchars($_POST['content']));
	
			//$datePosted = date('d/m/Y');
			$usrId = getUserId($pdo);
			$author = getUserUsername($pdo);
	
			$queryPrepared = $pdo->prepare("INSERT INTO utrackpa_forum(id_usr, author, title, category, sub_category, content) VALUES (?, ?, ?, ?, ?, ?)");
		
			$query = $queryPrepared->execute(array($usrId, $author, $title, $category, $sub_category, $content));
			
			$successMsg = '
				<div class="toast show align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
					<div class="d-flex">
						<div class="toast-body">
							Posted !
						</div>
						<button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
					</div>
				</div>';
		}else{
			$errors = 'Please fill in all fields !';
		}
		
	}
}
*/
//get user all post
function getAllPosts(){
	
	$pdo = connectDB();
	$user_id = getUserId($pdo);
	
	$queryPrepared = $pdo->prepare("SELECT * FROM utrackpa_forum ORDER BY id DESC");	
	$queryPrepared->execute();
	
	return $queryPrepared->fetchAll();

	$errors = 'No posts found';
}

/*function getPostIds(){
	$pdo = connectDB();
	$queryPrepared = $pdo->prepare("SELECT id FROM utrackpa_forum WHERE id = '".getUserId()."' ");
	$queryPrepared->execute();

	return $queryPrepared->fetchAll();
}
function getPostIdUser(){

	$pdo = connectDB();
	$id_usr = getUserId($pdo);
	$queryPrepared = $pdo->prepare("SELECT id_usr FROM utrackpa_forum WHERE id_usr =:id_usr");	
	$queryPrepared->execute(["id_usr"=>$id_usr]);
	
	$result = $queryPrepared->fetch();
	return $result['id_usr'];
}*/

function getPostId(){
	$pdo = connectDB();
	
	$queryPrepared = $pdo->prepare("SELECT * FROM utrackpa_forum");
	$queryPrepared->execute();

	$result = $queryPrepared->fetchAll()[0];
	return $result;
}

/*if($queryPrepared->rowCount() > 0){
		$postInfo = $queryPrepared->fetch();
	
		if($postInfo['id_usr'] == $user_id){
	
			$postTitle = $postInfo['title'];
			$postCategory = $postInfo['category'];
			$postSubCategory = $postInfo['sub_category'];
			$postContent = $postInfo['content'];
			
			
			
		}else{
			
		}
	}else{
		$errors = 'No posts found';
	}

}
// get user post

	$pdo = connectDB();
	$user_id = getUserId($pdo);

	$queryPrepared = $pdo->prepare("SELECT * FROM utrackpa_forum WHERE id = ?");
	$queryPrepared->execute(array($user_id));
*/

