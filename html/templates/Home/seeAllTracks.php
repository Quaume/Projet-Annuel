<?php
require_once '../../functions/functions.php';
require '../../functions/seeAllTrackByCategory.php';

if(!isConnected()){
	die(header("Location: ../../index.php"));
}
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

<div class="container">
    <?php 
    $count = 0;
    foreach ($categoryInfo as $info) {
        if ($count == 0) {
           ?>
            <table class="table align-middle mb-0">
            <thead class="">
                <tr>
                    <th>Name</th>
                    <th>Album</th>
                    <th>Date Release</th>
                    <th>Category</th>
                    <th>Likes</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $count = 1; } 
            ?> 
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="../../ressources/tracks_cover/<?=getImgTrackById($info['id']);?>" alt=""
                                style="width: 45px; height: 45px" class="rounded-circle" />
                            <div class="ms-3">
                                <p class="fw-bold mb-1"><?=$info['title']?></p>
                                <p class="text-muted mb-0"><?=getUserUsernameById($info['artist']);?></p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1"><?=$info['album']?></p>
                    </td>
                    <td>
                    <p class="fw-normal mb-1"><?=$info['dateOfRelease'];?></p>
                    </td>
                    <td><?=$info['category'];?></td>
                    <td>
                        <a href="../../functions/favTrackList.php?id=<?=$info['id'];?>" type="button" class="btn btn-link btn-sm btn-rounded">
                           Count Like
                        </a>
                    </td>
                </tr>
                <?php
        }?>
        </tbody>
    </table>
    <?php
            if (empty($categoryInfo)) {
                ?>
                <div class="d-flex justify-content-center">
                    <div class="show toast" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                            <img src="../../ressources/IMAGES-HEADER/icon.png" width="16" height="16"class="rounded me-2" alt="...">
                            <strong class="me-auto">Utrack</strong>
                            <small></small>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                            <div class="d-flex align-items-center">
                            
                                <strong>Sorry no tracks found for this category..</strong>
                                <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
</div>