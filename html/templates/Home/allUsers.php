<?php
require_once '../../functions/functions.php';
require '../../functions/seeAllTrackByCategory.php';

if(!isConnected()){
	die(header("Location: ../../index.php"));
}

$colcount = 0;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Utrack</title>
    <link rel="icon" type="image/png" href="../../ressources/IMAGES-HEADER/icon.png">
    <script src="https://kit.fontawesome.com/9dc661cec8.js" crossorigin="anonymous"></script>
    <!--CSS / JS BOOTSTRAP LINK-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link href="../../styles/header.css" rel="stylesheet">
    <link href="../../styles/body.css" rel="stylesheet">
    <link href="../../styles/dashboard.css" rel="stylesheet">
    <link href="../../styles/footer.css" rel="stylesheet">
    <link href="../../styles/audio.css" rel="stylesheet">
</head>

<body>
    <header>
        <div class="container-fluid navContent">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand ms-5 a" href="Home.php">
                        <img src="../../ressources/IMAGES-HEADER/Utrack_logo.png" width="150" height="65" alt="Logo">
                    </a>   
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto me-5 pe-5">

                        <a type="button" class="discoverUsers me-5 mt-3 a" href="allUsers.php">
                        Discover Users !
                        </a>


                            <!-- DropDowns -->
                            <div class="d-flex mt-2 me-5">
                                <!-- First Dropdown -->
                                <div class="dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Hip Pop
                                    </a>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li><a class="dropdown-item" href="seeAllTracks.php?category=Trap">Trap</a></li>
                                        <li><a class="dropdown-item" href="seeAllTracks.php?category=Rap / Old school">Rap / Old School</a></li>
                                        <li><a class="dropdown-item" href="seeAllTracks.php?category=R&B">R&B</a></li>
                                    </ul>
                                </div>

                                <!-- Second Dropdown -->
                                <div class="dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink"data-bs-toggle="dropdown" aria-expanded="false">Pop</a>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li><a class="dropdown-item" href="seeAllTracks.php?category=Pop Rock">Pop Rock</a></li>
                                        <li><a class="dropdown-item" href="seeAllTracks.php?category=Latin Pop">Latin Pop</a></li>
                                    </ul>
                                </div>

                                <!-- Third Dropdown -->
                                <div class="dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Drill
                                    </a>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li><a class="dropdown-item" href="seeAllTracks.php?category=Uk Drill">Uk Drill</a></li>
                                        <li><a class="dropdown-item" href="seeAllTracks.php?category=Jersey Concept">Jersey Concept</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- LIGHTMODE-DARKMODE -->
                            <div class="switchMode mt-3 me-5">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                </div>
                            </div>

                            <div class="img-thumbnail img-circle">
                                <div type="file" id="formFile">
                                    <a href="dash-board.php" class="a">
                                        <?php printf(getUserUsernameById(getUserId()));?>
                                        <img src="../../ressources/img-profile/<?php printf(getUserImgById(getUserId()));?>" class="profile img-circle ms-1" type="file">
                                    </a>
                                    <span class="position-absolute"></span>
                                </div>
                            </div>

                        <!--logout--->
                            <a href="../../functions/logout.php" class="ps-3 mt-1">
                                <img src="../../ressources/IMAGES-HEADER/logout.png" class="ms-3 mt-1" width="40" alt="logout">
                            </a>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <script src="lightDarkMode.js" type="text/javascript"></script>
        <script src="searchAjax.js" type="text/javascript"></script>
    </header>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
                <?php if(!empty($_GET['search'])){
                   echo $hint;
                }
                ?>
        </div>
    </div>
</div>

<div class="container pb-5">
    <div class="row pb-5">
        <?php

        foreach(getAllUsers() as $user){

            if($user['id'] != getUserId()){

            if($colcount == 1){
                echo'<div class="col-2"></div>';
                $colcount = 0;
            }else{
                $colcount = 1;
            }

            echo'

                <div class="col-md-5 text-center mt-4 mb-4 py-3 userBlock">
                    <a href="user.php?user='.$user['id'].'" class="userLink">
                        <img src=../../ressources/img-profile/'.getUserImgById(getUserIdByUsername($user['username'])).' class="rounded-circle profile">
                    </a>
                    <a href="user.php?user='.$user['id'].'" class="userLink mx-2">
                        '.$user['username'].'
                    </a> -
                        '.ucwords($user['accountType']).'
                    <a href="user.php?user='.$user['id'].'" class="btn btn-outline-secondary mx-2">
                        View Page
                    </a>
            ';
            if(empty(isUserFollowed(getUserId(),$user["id"]))){
                echo'<a href="../../functions/follow.php?followed='.$user["username"].'&amp;source=allUsers" class="btn btn-outline-secondary" >Follow</a>';
            }else{
                echo'<a href="../../functions/unfollow.php?followed='.$user["username"].'&amp;source=allUsers" class="btn btn-outline-secondary">Unfollow</a>';
            }
            echo'
            </div>

            ';

}
}
?>
</div>
</div>

<div class="pb-5"></div>
<div class="pb-5"></div>
<div class="pb-5"></div>

<!--FOOTER-->
<footer class="mt-5 py-3">
    <?php include "footer-home.php"?>
</footer>
</body>

</html>