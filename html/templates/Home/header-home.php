<?php
require '../../functions/functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Utrack</title>
    <link rel="icon" type="image/png" href="../../ressources/IMAGES-HEADER/icon.png">

    <!--CSS / JS BOOTSTRAP LINK-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <link href="../../styles/header.css" rel="stylesheet">
    <link href="../../styles/body.css" rel="stylesheet">
    <link href="../../styles/dashboard.css" rel="stylesheet">
</head>

<body>
    <header>
        <div class="container-fluid navContent">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand ms-5" href="Home.php">
                        <img src="../../ressources/IMAGES-HEADER/Utrack_logo.png" width="150" height="65" alt="Logo">
                    </a>   
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto me-5 pe-5">


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
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
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
                                        <?php printf(getUserUsername());?>
                                        <img src="../../ressources/IMG-CONTENT/dosV.png" class="profile img-circle ms-1" type="file" >
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
    </header>