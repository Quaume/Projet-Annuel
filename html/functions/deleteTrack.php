<?php

require 'functions.php';

$trackId = $_GET['trackId'];

$errors = [];
$confirm = [];

$pdo = connectDB();

$queryprepared = $pdo->prepare("SELECT * FROM utrackpa_tracks WHERE id=:id");
$queryprepared->execute(['id' => $trackId]);

if(!empty($queryprepared->fetch())){

    if(getTrackArtistById($trackId) != getUserId()){

        $errors[] = "You are not the artist of this track";
        $_SESSION['errors'] = $errors;

    }else{

    $queryprepared = $pdo->prepare("DELETE FROM utrackpa_tracks WHERE id=:id");
    $queryprepared->execute(['id' => $trackId]);

    $confirm[] = "Track has been deleted successfully";
    $_SESSION['confirm'] = $confirm;

    }

}else{

$errors[] = "This track does not exist";
$_SESSION['errors'] = $errors;

}


header("Location: ../templates/Home/dash-board.php");