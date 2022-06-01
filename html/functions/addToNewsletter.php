<?php

    require 'functions.php';

    $email = getUserEmail();

	$pdo = connectDB();
    $queryPrepared = $pdo->prepare("INSERT INTO utrackpa_newsletter(email) VALUES (:email);");
    $queryPrepared->execute(
        [
        "email" => $email,
        ]
    );

    header("Location: ../templates/Home/dash-board.php")
?>