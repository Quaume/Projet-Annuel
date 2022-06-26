<?php

    require 'functions.php';

    if(isConnected()){

    $title = $_POST["title"];
    $artist = getUserId();
    $type = $_POST["trackType"];
    $track = $_FILES["track"];
    $trackCover = $_FILES["trackCover"];

    $title = trim($title);
    $type = trim($type);

    $trackName = $artist."_".$title;
    $trackCoverName = $artist."_".$title;

	$trackextension = "mp3";
		//je renvoie l'extension de fichier en ignorant le caractère '.'
		$trackextensionUpload = strtolower(substr(strrchr($track['name'], '.'),1));
		if($trackextensionUpload == $trackextension){
			// Creation de chemin du fichier
			$path = "../ressources/tracks/".$artist."_".$title.".".$trackextensionUpload;
			//On va deplacer se fichier stocker temporairement et le placer dans path
			$result = move_uploaded_file($track['tmp_name'],$path);

            $trackName = $trackName.".".$trackextensionUpload;

			}

                $max_size = 2097152;
                $coverextension = array('jpeg','jpg','png');
                if($trackCover['size'] <= $max_size){
                    //je renvoie l'extension de fichier en ignorant le caractère '.'
                    $coverextensionUpload = strtolower(substr(strrchr($trackCover['name'], '.'),1));
                    if(in_array($coverextensionUpload, $coverextension)){
                        // Creation de chemin du fichier
                        $path = "../ressources/tracks_cover/".$artist."_".$title.".".$coverextensionUpload;
                        //On va deplacer se fichier stocker temporairement et le placer dans path
                        $result = move_uploaded_file($trackCover['tmp_name'],$path);

                        $trackCoverName = $trackCoverName.".".$coverextensionUpload;

                    }
                }else{
                    $errors[] = "The cover should not exceed 2Mb";
                }

	$pdo = connectDB();
    $queryPrepared = $pdo->prepare("INSERT INTO utrackpa_tracks(title, artist, category, trackName, img_profile) VALUES (:title, :artist, :category, :trackName, :img_profile)");
    $queryPrepared->execute(
        [
        "title" => $title,
        "artist" => $artist,
        "category" => $type,
        "trackName" => $trackName,
        "img_profile" => $trackCoverName
        ]
    );

        header("Location: ../templates/Home/dash-board.php");
    } else {
        header("Location: ../index.php");
    }   


?>