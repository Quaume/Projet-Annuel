<?php

    require 'functions.php';

    if(isConnected()){

        $errors = [];

        // Verif formulaire

        if(

            !isset($_POST['title']) ||
            !isset($_POST['trackType']) ||
            !isset($_FILES['trackFile']) ||
            !isset($_FILES['trackCover'])

        ){

                $_SESSION['errors'] = "Missing informations for track upload";
                header('Location: ../templates/Home/dash-board.php');

        }else{

        // Recup données post

        $title = $_POST['title'];
        $trackType = $_POST['trackType'];
        $trackFile = $_FILES['trackFile'];
        $trackCover = $_FILES['trackCover'];

        $title = trim($title);
        $artist = getUserId();

        $trackName = $artist.'_'.$title;

        // Recup extension fichier

        $trackExtensionToUpload = strtolower(substr(strrchr($trackFile['name'], '.'),1));

        // Gestion fichier track

        if($trackExtensionToUpload == 'mp3'){

            $trackToUpload = $trackName.'.'.$trackExtensionToUpload;

            $trackPath = '../ressources/tracks/'.$trackToUpload;

        }else{
            $errors[] = "The file must be a mp3 file";
        }

        // Gestion fichier cover

        $maxCoverSize = 2097152;

        $coverExtension = ['jpg','png','jpeg'];

        if($trackCover['size'] < $maxCoverSize){

        $coverExtensionToUpload = strtolower(substr(strrchr($trackCover['name'], '.'),1));

            if(in_array($coverExtensionToUpload,$coverExtension)){

                $coverToUpload = $trackName.'.'.$coverExtensionToUpload;

                $coverPath = '../ressources/tracks_cover/'.$coverToUpload;

            }else{
                $errors[] = "The file must be a jpg/png/jpeg file";
            }

        }else{
            $errors[] = "The file shouldn't exceed 2mb";
        }


        // Création fichiers et insertion BDD
            if(count($errors) != 0){

                $_SESSION['errors'] = $errors;
                header("Location: ../templates/Home/dash-board.php");

            }else{

                $trackHasBeenUploaded = move_uploaded_file($trackFile['tmp_name'],$trackPath);
                $coverHasBeenUploaded = move_uploaded_file($trackCover['tmp_name'],$coverPath);

                $pdo = connectDB();
                $queryprepared = $pdo->prepare("INSERT INTO utrackpa_tracks(title, artist, category, trackName, img_profile) VALUES (:title, :artist, :category, :trackName, :img_profile)");
                $query = $queryprepared->execute(
                [
                    "title" => $title,
                    "artist" => $artist,
                    "category" => $trackType,
                    "trackName" => $trackToUpload,
                    "img_profile" => $coverToUpload
                ]
                );

                unset($_POST['title']);
                unset($_POST['trackType']);  
                unset($_FILES['trackFile']);  
                unset($_FILES['trackCover']);

                $_SESSION['confirm'] = "Your track has been successfully uploaded";
                header('Location: ../templates/Home/dash-board.php');

            }
        
        }
            
    }else{

        unset($_POST['title']);
        unset($_POST['trackType']);  
        unset($_FILES['trackFile']);  
        unset($_FILES['trackCover']);

        header('Location: ../index.php');
    }

?>