<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Utrack</title>
    <link rel="icon" type="image/png" href="../../ressources/IMAGES-HEADER/icon.png">

    <!--CSS / JS BOOTSTRAP LINK-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link href="../../STYLES/header.css" rel="stylesheet">
    <link href="../../STYLES/body.css" rel="stylesheet">
    <link href="../../STYLES/dashboard.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container-fluid navContent">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand ms-5" href="home.php">
                        <img src="../../ressources/IMAGES-HEADER/Utrack_logo.png"  width="150" height="65" alt="Logo">
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto me-5 pe-5">

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                        </ul>

                        <!-- LIGHTMODE-DARKMODE -->
                        <div class="switchMode mt-1 me-5">
                            <a href="" id="lightMode">
                                <img src="../../RESSOURCES/IMAGES-HEADER/DARKMODE.png" width="80px" alt="">
                            </a>
                        </div>
        
                        <!--SEARCH-BAR-->
                        <form class="d-flex justify-content-center form-inline my-2 my-lg-0 me-5">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <a href="#">
                                <img src="../../RESSOURCES/IMAGES-HEADER/search-logo2.png" class="search img-responsive ms-2 mt-1" alt="Search">
                            </a>                                   
                        </form>
                        <a href="#">
                            <img src="../../RESSOURCES/IMG-CONTENT/dosV.png" class="profile" alt="profile">
                        </a>
                    </div>
                </nav>
            </div>
        </div>
    </header>
