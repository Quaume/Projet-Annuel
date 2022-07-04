<?php
require '../../functions/functions.php';
require '../../functions/seeAllTrackByCategory.php';
require '../../functions/getUsr&Tracks.php';

if(!isConnected()){
	die(header("Location: ../../index.php"));
}

unset($_SESSION['errors']);
unset($_SESSION['confirm']);

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
    <link href="../../styles/user.css" rel="stylesheet">
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

    <?php
    if(!isset($_GET['user'])){
        echo'
        <div class="text-center subtitle mt-5">
        This user does not exist
        </div>
        <div class="pb-5"></div>
        <div class="pb-5"></div>
        <div class="pb-5"></div>
        <div class="pb-5"></div>
        <div class="pb-5"></div>
        <div class="pb-5"></div>
        <div class="pb-5"></div>
        <div class="pb-4"></div>
        <div class="pb-3"></div>
        ';
    }else{
        $id = $_GET['user'];
    ?>

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
        <div class="row d-flex justify-content-center">
            <div class="container py-5">

                <!-- Profil User -->
                <?php if(isset($getTrackOfUsr)){
                    ?>
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-md-12 col-xl-4 mt-4">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body text-center">
                                <div class="mt-3 mb-4">
                                    <img src="../../ressources/img-profile/<?=$usrProfile;?>"
                                        class="rounded-circle img-fluid" style="width: 60px; height:75%;" />
                                </div>
                                <h4 class="mb-2"><?=$usrName;?></h4>
                                <p class="text-muted mb-4"><span class="mx-2"><?=$usrAccountType;?></span>
                                    <a href="#!"></a>
                                </p>
                                <div class="mb-4 pb-2"><p>Registered Since :</p><br><?=$usrRegister?></div>
                                <div class="d-flex justify-content-between text-center mt-5 mb-2">
                                    <div>
                                        <p class="mb-2 h5"><?=count(getUserFollowers(getUserIdByUsername($usrName)));?>
                                        </p>
                                        <p class="text-muted mb-0">Followers</p>
                                    </div>
                                    <div class="px-3">
                                        <p class="mb-2 h5"><?=count(getUserFollowed(getUserIdByUsername($usrName)));?>
                                        </p>
                                        <p class="text-muted mb-0">Followed</p>
                                    </div>
                                    <div>
                                        <p class="mb-2 h5"><?=count(getUserTracksById($id_usr));?></p>
                                        <p class="text-muted mb-0">Total Tracks</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-xl-4 mt-4">
                        <div class="" style="">
                            <div class="card p-3" style="height: 400px; border-radius: 15px;">

    <?php
        if(!empty($_SESSION['errors'])){
            echo "<div class='errors mt-3 text-center'>
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
             echo "<div class='errors mt-3 text-center'>
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

                                <p class="subtitle darkB text-center ms-2 mt-3 mb-2 p-1 recentlyPost">Tracks</p>
                                <div class="card overflow-scroll p-3" style="height: 400px; border-radius: 15px;">
                                <?php foreach (getUserTracksById($id_usr) as $track){
                            ?>
                                <div class="card my-2">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <!-- Button trigger modal -->
                                        <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal<?=$track['id']?>">
                                            <img src="../../ressources/tracks_cover/<?=$track['img_profile']?>" class="me-3" alt="track_cover" style="width: 45px; height: 45px">     
                                                <?=$track['title']?>
                                        </a>
                                        <div>

                                            <?php
                                            if(!isTrackInFav($track['id'],getUserId())){
                                                echo'
                                                <a href="../../functions/favTrackList.php?id='.$track['id'].'&user='.$id.'" type="button" class="btn btn-outline-secondary">
                                                    <i class="fa-solid fa-heart-circle-plus"></i>
                                                </a>
                                                ';
                                            }else{
                                                echo'
                                                <a href="../../functions/removeFromFavTrackList.php?id='.$track['id'].'&user='.$id.'&source=user" type="button" class="btn btn-outline-secondary">
                                                    <i class="fa-solid fa-heart-circle-minus"></i>
                                                </a>
                                                ';
                                            }
                                            ?>
                                            <?php

                                            if(userRequestTrack($track['id'])){

                                            switch(getRequestStatusOfTrack($track["id"])){
                                            case 1:
                                                echo'
                                                <a type="button" class="btn btn-outline-secondary disabled">
                                                    <i class="fa-solid fa-circle-question"></i>
                                                </a>
                                                ';
                                                 break;
                                                
                                            case 2:
                                                echo'
                                                <a type="button" class="btn btn-outline-secondary disabled">
                                                    <i class="fa-solid fa-circle-xmark"></i>
                                                </a>
                                                ';
                                                break;
                                                
                                            case 3:
                                                echo'
                                                <a href="../../ressources/tracks/'.$track["trackName"].'" type="button" class="btn btn-outline-secondary" download>
                                                    <i class="fa-solid fa-circle-down"></i>
                                                </a>
                                                ';
                                                break;
                                                
                                            default:
                                                echo'
                                                <a href="../../functions/requestTrack.php?trackId='.$track["id"].'&user='.$id.'" type="button" class="btn btn-outline-secondary">
                                                    <i class="fa-solid fa-circle-plus"></i>
                                                </a>
                                                ';
                                                break;

                                            }
                                        }else{

                                            echo'
                                            <a href="../../functions/requestTrack.php?trackId='.$track["id"].'&user='.$id.'" type="button" class="btn btn-outline-secondary">
                                                <i class="fa-solid fa-circle-plus"></i>
                                            </a>
                                            ';

                                        }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal<?=$track['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel"   aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"><?=$track['title']?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body d-flex justify-content-center">
                                    <audio id="playerAudio" controlslist="nodownload" controls src="../../ressources/tracks/<?=$track['trackName']?>"></audio>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <?php
                        }
                        ?>
                        </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-12 col-xl-4 mt-4">
                        <div class="" style="">
                            <div class="card p-3" style="height: 300px; border-radius: 15px;">
                                <p class="subtitle darkB text-center ms-2 mt-3 mb-2 p-1 recentlyPost">Albums</p>
                                <div class="card overflow-scroll p-3" style="height: 400px; border-radius: 15px;">
                                <?php foreach (getUserAlbumsById($id_usr) as $album){
                            ?>
                                <div class="card my-2">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <!-- Button trigger modal -->
                                        <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal<?=$album['id']?>">
                                            <img src="../../ressources/albums_cover/<?=$album['img_profile']?>" alt="track_cover" style="width: 45px; height: 45px">     
                                        </a>
                                        <a class="btn" href="album.php?album=<?=$album['id']?>&artist=<?=$id?>">
  
                                            <p class="" style="cursor:pointer;">
                                                <?=$album['title']?>
                                            </p>
                                        </a>
                                    </div>
                                </div>
                                <?php
                        }
                        ?>
                        </div>
                            </div>
                        </div>

                    </div>
                    <?php
                }
                ?>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
}
?>
<footer class="mt-5">
    <?php include 'footer-home.php';  ?>
</footer>