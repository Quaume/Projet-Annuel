<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include '../../../includes/forum-layout/head.php'; ?>
        <link rel="stylesheet" href="../../../assets/styles/forum.css">
    </head>

<body>

    <?php require '../../../../functions/functions.php';
     //require '../../../../functions/functions.php';?>
    <?php require 'view_one_post.php';?>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="../../../main/forum.php" alt="Home">
                <img src="../../../../ressources/IMAGES-HEADER/logo-utrack.png" alt="" width="150" height="70">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../../../main/forum.php"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                </ul>
                <ul class="me-5 mt-3 dropdown">
                    <button class="btn btn-link dropdown-toggle text-decoration-none" data-bs-toggle="dropdown"
                        role="button" id="dropdown">Post Menu</button>
                    <ul class="dropdown-menu" aria-labelledby="dropdown">
                        <li><a class="dropdown-item" href="#">Hip pop post</a></li>
                        <li><a class="dropdown-item" href="#">Pop Post</li>
                        <li><a class="dropdown-item" href="#">Drill Post</a></li>
                        <hr class="dropdown-divider">
                        <li><a class="dropdown-item" href="../../../main/my_post.php">See my posts</a></li>
                        <li><a class="dropdown-item" href="../../../main/publish_content.php">Publish post</li>
                        <li><a class="dropdown-item" href="../users_config/edit_post.php">Edit post</a></li>
                        <hr class="dropdown-divider">
                        <li><a class="dropdown-item" href="../../../../templates/Home/dash-board.php">return
                                dashboard</a></li>
                    </ul>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php 
        if(isset($errors)){
            echo $errors;
        }
    if(isset($post_date_of_release))
        ?>
        <div class="d-flex justify-content-center">
        <div class="card w-75 mt-4">
        <div class="card-body">
        <div class="row">
        <div class="d-flex align-items-center">
        <div class="p-2 flex-fill">
        <img class="profile" src="../../../../ressources/img-profile/<?=getUserImgById(getUserIdByUsername($post_author));?>"></div>
        <div class="p-2 flex-fill">
        <h4 class="card-title"><?=$post_title;?></h4>
        </div>
        </div>
        
        <p class="fw-lighter text-start ms-2">
        <?=$post_author;?>
        </p>
        </div>
        <p class="card-text fw-light text-start mt-3"><?=$post_content;?></p>
        </div>
        <div class="d-flex justify-content-between">
        <div class="cat-subCat-gory d-flex align-items-center ms-5">
        <h6 class="fw-light pe-2"><?=$post_category;?></h6>
        <h6 class="fw-light "><?=$post_sub_category;?></h6>
        </div>
        <div class="me-2 mb-1">
        <button type="button" class="btn btn-secondary btn_like">
        <img src="../../../../ressources/IMG-CONTENT/hearth.png">
        <span class="ms-2 badge">177</span>
        </button>
        </div>
        </div>
            <div class="card-footer bg-transparent fw-lighter text-end border-dark">
                <?=$post_date_of_release;?>
            </div>
        </div>
        </div>
    </div>
        <?php

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>