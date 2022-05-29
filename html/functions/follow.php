<?php

    require 'functions.php';

    $follower = $_GET['follower'];
    $followed = $_GET['followed'];

	$pdo = connectDB();
    $queryPrepared = $pdo->prepare("INSERT INTO utrackpa_followers(follower, followed) VALUES (:follower, :followed);");
    $queryPrepared->execute(
        [
        "follower" => $follower,
        "followed" => $followed
        ]
    );

    header("Location: testback.php")
?>