<?php

    require 'functions.php';

    if(!isConnected()){
        die(header("Location: ../index.php"));
    }

    $follower = getUserIdByUsername($_GET['follower']);
    $followed = getUserIdByUsername($_GET['followed']);

	$pdo = connectDB();
    $queryPrepared = $pdo->prepare("DELETE FROM utrackpa_followers WHERE follower='$follower' AND followed='$followed';");
    $queryPrepared->execute();

        header("Location: testback.php");

?>