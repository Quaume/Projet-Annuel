<?php

    require 'functions.php';

    $follower = $_GET['follower'];
    $followed = $_GET['followed'];

	$pdo = connectDB();
    $queryPrepared = $pdo->prepare("DELETE FROM utrackpa_followers WHERE follower='$follower' AND followed='$followed';");
    $queryPrepared->execute();

    header("Location: testback.php")
?>