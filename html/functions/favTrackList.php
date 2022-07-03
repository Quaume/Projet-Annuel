<?php
require 'functions.php';


if(isConnected()){
    $errors = [];
    if(!isset($_GET['id'])){

        $_SESSION['errors'] = "No track to add in your list";
        header('Location: ../templates/Home/user.php');
    }else{
        $track_id = $_GET['id'];
        $userId = getUserId();
        $artist = getTrackArtistById($track_id);
        

        // VERIF SI LA TRACK EXIST EN BDD
        $pdo = connectDB();
        $queryPrepared = $pdo->prepare("SELECT id FROM utrackpa_tracks WHERE id =:id ");
        $queryPrepared->execute(["id" => $track_id]);

        if(!empty($queryPrepared->fetch())){
            $queryPrepared = $pdo->prepare("INSERT INTO utrackpa_favoris_track(trackName,artist,id_user) VALUES(:trackName, :artist, :id_user)");
            $query = $queryPrepared->execute(
            [
                "trackName" => $track_id,
                "artist" => $artist,
                "id_user" => $userId
            
            ]);
            header('Location: ../templates/Home/user.php');
        }else{
            $errors[] = "You have already track in you track list";
        }
    }   

}