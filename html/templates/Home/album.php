<?php
require '../../functions/functions.php';

if(!isConnected()){
	die(header("Location: ../../index.php"));
}

$album = $_GET['album'];
$artist = $_GET['artist'];

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

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

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
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
                                        <li><a class="dropdown-item"
                                                href="seeAllTracks.php?category=Rap / Old school">Rap / Old School</a>
                                        </li>
                                        <li><a class="dropdown-item" href="seeAllTracks.php?category=R&B">R&B</a></li>
                                    </ul>
                                </div>

                                <!-- Second Dropdown -->
                                <div class="dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                        data-bs-toggle="dropdown" aria-expanded="false">Pop</a>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li><a class="dropdown-item" href="seeAllTracks.php?category=Pop Rock">Pop
                                                Rock</a></li>
                                        <li><a class="dropdown-item" href="seeAllTracks.php?category=Latin Pop">Latin
                                                Pop</a></li>
                                    </ul>
                                </div>

                                <!-- Third Dropdown -->
                                <div class="dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Drill
                                    </a>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li><a class="dropdown-item" href="seeAllTracks.php?category=Uk Drill">Uk
                                                Drill</a></li>
                                        <li><a class="dropdown-item"
                                                href="seeAllTracks.php?category=Jersey Concept">Jersey Concept</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- LIGHTMODE-DARKMODE -->
                            <div class="switchMode mt-3 me-5">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="flexSwitchCheckChecked" checked>
                                </div>
                            </div>

                            <div class="img-thumbnail img-circle">
                                <div type="file" id="formFile">
                                    <a href="dash-board.php" class="a">
                                        <?php printf(getUserUsernameById(getUserId()));?>
                                        <img src="../../ressources/img-profile/<?php printf(getUserImgById(getUserId()));?>"
                                            class="profile img-circle ms-1" type="file">
                                    </a>
                                    <span class="position-absolute"></span>
                                </div>
                            </div>

                            <!--logout--->
                            <a href="../../functions/logout.php" class="ps-3 mt-1">
                                <img src="../../ressources/IMAGES-HEADER/logout.png" class="ms-3 mt-1" width="40"
                                    alt="logout">
                            </a>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <script src="lightDarkMode.js" type="text/javascript"></script>
        <script src="searchAjax.js" type="text/javascript"></script>
    </header>


        <div class="container text-left pb-5">
            <div class="text-center pb-5">
                <div class="row overflow-auto mt-5 pb-5 text-left">

                <?php
            if(!empty($_SESSION['errors'])){
                echo "<div class='errors mt-3 mb-3 text-center'>
                ";
                foreach($_SESSION['errors'] as $error){
                    printf($error);
                    echo"<br>";
                }
                echo"
                </div>
                ";
                unset($_SESSION['errors']);
            }

            if(!empty($_SESSION['confirm'])){
                echo "<div class='errors mt-3 mb-3 text-center'>
                ";
                foreach($_SESSION['confirm'] as $confirm){
                    printf($confirm);
                    echo"<br>";
                }
                echo"
                </div>
                ";
                unset($_SESSION['confirm']);
            }
        
        ?>

                        <div class="col-2"></div>
                        <div class="col-8 albumDisplay py-4 pb-5">

                        <?php 

                        echo'
                        <div class="d-flex justify-content-between">
                            <h3 class="mb-5">'.getAlbumNameById($album).'
                            </h3>
                            <div>
                            ';
                                    if(getUserId() == $artist){
                                    echo'

                                    <!-- Modal add Tracks -->
                                    <div class="modal fade" id="modalAddTracks" tabindex="-1" role="dialog" aria-labelledby="modalAddTracksLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content bg-edit">
                                                <div class="modal-header d-flex justify-content-evenly">
                                                    <h5 class="pr_modal p-2">Add Tracks</h5>
                                                </div>
                                
                                                <div class="modal-body text-center form-group">
                                                    <div class="overflow-auto" style="height:400px;">
                                
                                                        <form method="POST" action="../../functions/addTrackToAlbum.php?album='.$album.'&artist='.$artist.'" enctype="multipart/form-data">
                                
                                                        ';
                                
                                                            foreach(getUserTracksById($artist) as $track){

                                                                if($track['album'] == null){

                                                                    echo'
                                                                    <div class="card my-2">
                                                                    <div class="card-body d-flex justify-content-between align-items-center subtitle">
                                                                    <img src="../../ressources/tracks_cover/'.$track['img_profile'].'" alt="track_cover" style="width: 40px; height: 40px" class="rounded me-5"/>   
                                                                    '.$track["title"].'
                                                                        <input class="ms-5" type="checkbox" name="tracks['.$track['id'].']"><br>
                                                                    </div>
                                                                    </div>                                                                    
                                                                    ';

                                                                }

                                                            }
                                
                                                        echo'
                                
                                                            <input type="submit" class="btn form-control-md text-center formsbtns mt-4 px-3 py-1 btn_f_v_edit" value="Validate">
                                                        </form>
                                
                                                    </div>
                                                </div>
                                
                                                <div class="modal-footer">
                                                    <button type="button" data-bs-dismiss="modal" class="btn btn_f_v_edit" aria-label="Close">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <a type="button" data-bs-toggle="modal"
                                    data-bs-target="#modalAddTracks" class="btn btn-sm btn-outline-secondary">Add tracks</a>

                                    ';
                                    }
                                echo'
                            </div>
                        </div>
                            <ol>
                        ';
                        
                        foreach(getTracksByAlbum($album,$artist) as $track){

                            echo '
                                
                                <div class="py-2 text-left">

                                <li>

                                    <a class="text-decoration-none fw-bold mb-1 userLink" data-bs-toggle="modal" data-bs-target="#listenModal'.$track['id'].'">
                                        <img src="../../ressources/tracks_cover/'.$track['img_profile'].'" alt="track_cover" style="width: 40px; height: 40px" class="rounded mx-2"/>   
                                        '.$track["title"].'
                                    </a>';
                                    if(getUserId() == $artist){
                                    echo'
                                    <a href="../../functions/removeTrackFromAlbum.php?track='.$track['id'].'&album='.$album.'&artist='.$artist.'" class="btn btn-outline-secondary ms-5">
                                        Delete from album
                                    </a>
                                    ';
                                    }
                                echo'
                                </li>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="listenModal'.$track['id'].'" tabindex="-1" aria-labelledby="exampleModalLabel"   aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">'.$track['title'].'</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body d-flex justify-content-center">
                                    <audio id="playerAudio" controlslist="nodownload" controls src="../../ressources/tracks/'.$track['trackName'].' "></audio>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                
                                ';
                               
                                } ?>
                                 </ol>
                        </div> 
                </div>
            </div>
        </div>
        </body>

<div class="pb-5"></div>
<div class="pb-2"></div>

<footer class="mt-5 py-3">
    <?php include 'footer-home.php';  ?>
</footer>

