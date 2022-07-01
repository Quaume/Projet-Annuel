<?php

    require 'functions.php';


    if(isConnected()){

    $errors = [];

    $title = $_POST["title"];
    $type = $_POST["trackType"];
    $track = $_FILES["track"];
    $trackCover = $_FILES["trackCover"];
    $artist = getUserId();

    $title = trim($title);
    $type = trim($type);

    $trackName = $artist."_".$title;

		//je renvoie l'extension de fichier en ignorant le caractère '.'
            $trackextension = array('wav','mp3');
            $trackextensionToUpload = strtolower(substr(strrchr($track['name'], '.'),1));
            if(in_array($trackextensionToUpload, $trackextension)){

                $trackNameToUpload = $trackName.'.'.$trackextensionToUpload;

                printf($trackNameToUpload);
                printf($trackextensionToUpload);
                printf($track['name']);                

                // Creation de chemin du fichier
                $path = "../ressources/tracks/".$trackNameToUpload."";
                //On va deplacer se fichier stocker temporairement et le placer dans path
                $result = move_uploaded_file($track['tmp_name'],$path);

                }


                $max_size = 2097152;
                $coverextension = array('jpeg','jpg','png');
                if($trackCover['size'] <= $max_size){
                    //je renvoie l'extension de fichier en ignorant le caractère '.'
                    $coverextensionUpload = strtolower(substr(strrchr($trackCover['name'], '.'),1));

                    $trackCoverName = $trackName.'.'.$coverextensionUpload;
                    
                    if(in_array($coverextensionUpload, $coverextension)){
                        // Creation de chemin du fichier
                        $path = "../ressources/tracks_cover/".$trackCoverName."";
                        //On va deplacer se fichier stocker temporairement et le placer dans path
                        $result = move_uploaded_file($trackCover['tmp_name'],$path);

                    }
                }else{
                    $errors[] = "The cover should not exceed 2Mb";
                }

    if(count($errors) != 0){

    $_SESSION['errors'] = $errors;
    header("Location: ../templates/Home/dash-board.php");

    }else{
        
	$pdo = connectDB();
    $queryPrepared = $pdo->prepare("INSERT INTO utrackpa_tracks(title, artist, category, trackName, img_profile) VALUES (:title, :artist, :category, :trackName, :img_profile)");
    $queryPrepared->execute(
        [
        "title" => $title,
        "artist" => $artist,
        "category" => $type,
        "trackName" => $trackNameToUpload,
        "img_profile" => $trackCoverName
        ]
    );
    }

    $_SESSION["confirm"] = "Your track has been successfully uploaded";

        header("Location: ../templates/Home/dash-board.php");
    } else {
        header("Location: ../index.php");
    }   

?>