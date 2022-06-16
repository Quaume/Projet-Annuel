<?php

    require 'functions.php';

    if(!isConnected()){
        die(header("Location: ../index.php"));
    }

    $emailid = getUserId();

	$pdo = connectDB();
    $queryPrepared = $pdo->prepare("DELETE FROM utrackpa_newsletter WHERE emailid='$emailid';");
    $queryPrepared->execute();

        header("Location: ../templates/Home/dash-board.php");
