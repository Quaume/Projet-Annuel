<?php

    require 'functions.php';

    if(!isConnected()){
        die(header("Location: ../index.php"));
    }

    $follower = getUserIdByUsername($_GET['follower']);
    $followed = getUserIdByUsername($_GET['followed']);

	$pdo = connectDB();
    $queryPrepared = $pdo->prepare("INSERT INTO utrackpa_followers(follower, followed) VALUES (:follower, :followed);");
    $queryPrepared->execute(
        [
        "follower" => $follower,
        "followed" => $followed
        ]
    );
    header("Location: testback.php");

?>