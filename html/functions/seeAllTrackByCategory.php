<?php
$pdo = connectDB();

if(isset($_GET['category']) && !empty($_GET['category'])){
    $cParam = $_GET['category'];

    $checkIfCategoryExists = $pdo->prepare("SELECT * FROM utrackpa_tracks WHERE category = ? ORDER BY dateOfRelease DESC");
    $checkIfCategoryExists->execute(array($cParam));

    if($checkIfCategoryExists->rowCount() > 0){
        $categoryInfo = $checkIfCategoryExists->fetch();

        $idByCategory = $categoryInfo['id'];
        $category = $categoryInfo['category'];
        $titleByCategory = $categoryInfo['title'];
        $albumByCategory = $categoryInfo['album'];
        $artistByCategory = $categoryInfo['artist'];
        $coverByCategory = $categoryInfo['img_profile'];
        $trackNameByCategory = $categoryInfo['trackName'];
        $dateOfReleaseByCategory = $categoryInfo['dateOfRelease'];


    }else{
        $errors = "Sorry no tracks found for this category..";
    }
}else{
    $errors = "Sorry no tracks found for this category..";
}