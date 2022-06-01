<?php

    require 'functions.php';

    $email = getUserEmail();

	$pdo = connectDB();
    $queryPrepared = $pdo->prepare("DELETE FROM utrackpa_newsletter WHERE email='$email';");
    $queryPrepared->execute();

    header("Location: ../templates/Home/dash-board.php")
?>