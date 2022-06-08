<?php

    require 'functions.php';

    $emailid = getUserId();

	$pdo = connectDB();
    $queryPrepared = $pdo->prepare("INSERT INTO utrackpa_newsletter(emailid) VALUES (:emailid);");
    $queryPrepared->execute(
        [
        "emailid" => $emailid,
        ]
    );

    header("Location: ../templates/Home/dash-board.php")
?>