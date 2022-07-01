<?php

    require 'functions.php';

    if(!isConnected()){
        die(header("Location: ../index.php"));
    }

    $follower = getUserId();
    $followed = getUserIdByUsername($_GET['followed']);

    $source = $_GET['source'];

	$pdo = connectDB();
    $queryPrepared = $pdo->prepare("DELETE FROM utrackpa_followers WHERE follower='$follower' AND followed='$followed';");
    $queryPrepared->execute();

    switch($source){
        case "allUsers":
            header("Location: ../templates/Home/allUsers.php");
        break;
    }

?>