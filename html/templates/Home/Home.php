<?php
require '../../functions/functions.php';

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <link href="../../styles/header.css" rel="stylesheet">
    <link href="../../styles/body.css" rel="stylesheet">
    <link href="../../styles/footer.css" rel="stylesheet">
</head>
<header>
    <div class="container-fluid navContent">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand ms-3" href="Home.php">
                    <img src="../../ressources/IMAGES-HEADER/Utrack_logo.png" width="150" height="65" alt="Logo">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">

                        <a type="button" class="discoverUsers me-5 mt-3" href="#">
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
                                    <li><a class="dropdown-item" href="#">Trap</a></li>
                                    <li><a class="dropdown-item" href="#">Rap / Old School</a></li>
                                    <li><a class="dropdown-item" href="#">R&B</a></li>
                                </ul>
                            </div>

                            <!-- Second Dropdown -->
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Pop
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Pop Rock</a></li>
                                    <li><a class="dropdown-item" href="#">Latin Pop</a></li>
                                </ul>
                            </div>

                            <!-- Third Dropdown -->
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Drill
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Uk Drill</a></li>
                                    <li><a class="dropdown-item" href="#">Jersey Concept</a></li>
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

                        <!--SEARCH-BAR-->

                        <div class="mt-2">
                            <form class="d-flex justify-content-center form-inline my-2 my-lg-0 me-5">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search"
                                    aria-label="Search">
                                <a href="#">
                                    <img src="../../ressources/IMAGES-HEADER/search-logo2.png"
                                        class="search img-responsive ms-2 mt-1" alt="Search">
                                </a>
                            </form>
                        </div>

                        <div class="img-thumbnail img-circle">
                            <div type="file" id="formFile">
                                <a href="dash-board.php">
                                    <?php printf(getUserUsernameById(getUserId()));?>
                                    <img src="../../ressources/img-profile/<?php printf(getUserImgById(getUserId()));?>"
                                        class="profile img-circle ms-1" type="file">
                                </a>
                                <span class="position-absolute"></span>
                            </div>
                        </div>

                        <!--logout--->
                        <a href="../../functions/logout.php" class="mx-3 mt-1">
                            <img src="../../ressources/IMAGES-HEADER/logout.png" class="ms-3 mt-1" width="40"
                                alt="logout">
                        </a>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <script src="lightDarkMode.js" type="text/javascript"></script>
</header>

<!-- CAROUSEL -->
<div class="container my-5 p-5">
    <div class="row">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../../ressources/IMG-CONTENT/caroussel.png" class="d-block w-100" alt="A la une">
                </div>
                <div class="carousel-item">
                    <img src="../../ressources/IMG-CONTENT/caroussel.png" class="d-block w-100" alt="A la une">
                </div>
                <div class="carousel-item">
                    <img src="../../ressources/IMG-CONTENT/caroussel.png" class="d-block w-100" alt="A la une">
                </div>
            </div>
        </div>
    </div>
</div>

<!--TRACK BLOCK-->
<div class="container my-5 py-5">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8 d-flex justify-content-around trackBlock">
            <div>
                <img src="../../ressources/IMG-CONTENT/pulse.png" class="pulse block" alt="...">
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <h4 class="title font-weight-bold text-center">Track Title</h4>
                        <p class="blockquote-footer text-center">Made By <cite title="Source title">Flacko..</p>
                    </blockquote>
                </div>
            </div>
            <div>
                <img src="../../ressources/IMG-CONTENT/pulse.png" class="pulse block" alt="...">
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <h4 class="title font-weight-bold text-center">Track Title</h4>
                        <p class="blockquote-footer text-center">Made By <cite title="Source title">Flacko..</p>
                    </blockquote>
                </div>
            </div>
            <div>
                <img src="../../ressources/IMG-CONTENT/pulse.png" class="pulse block" alt="...">
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <h4 class="title font-weight-bold text-center">Track Title</h4>
                        <p class="blockquote-footer text-center">Made By <cite title="Source title">Flacko..</p>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="col-2"></div>
    </div>


</div>
<!--FOOTER-->
<footer class="">
    <?php include "../footer-index.php"?>
</footer>
</body>

</html>