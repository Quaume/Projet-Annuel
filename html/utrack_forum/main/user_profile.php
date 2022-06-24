<?php 
require '../../functions/functions.php';
require '../functions/forum_functions.php';
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../includes/forum-layout/head.php'; ?>
    <link rel="stylesheet" href="../assets/styles/forum.css">
    <link rel="icon" type="image/png" href="ressources/IMAGES-HEADER/icon.png">
</head>
  <body>
  <?php include '../includes/bs-layout/nav_bar.php'; ?>
  <div class="">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-9 col-xl-7">
        <div class="card">
          <div class="rounded-top text-white d-flex flex-row" style="background-color: var(--bs-success-bg); height:200px;">
            <div class="ms-4 mt-4 d-flex flex-column" style="width: 150px;">
              <img  src="../../ressources/img-profile/'<?=getUserImgById(getUserId());?>'  " alt="profile" class="img-fluid img-thumbnail mt-4 mb-2" style="width: 150px; z-index: 1">
              <a type="button" href="../functions/php-config/soon.php" class="btn btn-outline-secondary mt-5" style="z-index: 1;">
                Edit profile
              </a>
            </div>
            <div class="ms-3" style="margin-top: 130px;">
              <h5>Username</h5>
              <p></p>
            </div>
          </div>
          <div class="p-4 text-black" style="background-color: #FFF6EA;">
            <div class="d-flex justify-content-end text-center py-1">
              <div class="px-3">
                <p class="mb-1 h5">1026</p>
                <p class="small text-muted mb-0">Followers</p>
              </div>
              <div>
                <p class="mb-1 h5">478</p>
                <p class="small text-muted mb-0">Following</p>
              </div>
            </div>
          </div>
          <div class="card-body p-4 text-black">
            <div class="mb-5">
              <p class="lead fw-normal mb-1 text-center">Bio</p>
              <div class="p-4" style="background-color: #FFF6EA;">
                <p class="font-italic mb-1">Lorem ipsum dolor sit am</p>
                <p class="font-italic mb-1">Lorem ipsum dolor sit am</p>
                <p class="font-italic mb-0">Lorem ipsum dolor sit am</p>
              </div>
            </div>
            <div class="d-flex justify-content-between align-items-center mb-4">
              <p class="lead fw-normal mb-0">Recent Post</p>
              <p class="mb-0"><a href="#" class="text-muted text-decoration-none">Show</a></p>
            </div>
            <div class="row g-2">
              <div class="col mb-2">

              </div>
              <div class="col mb-2">

              </div>
            </div>
            <div class="row g-2">
              <div class="col">

              </div>
              <div class="col">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
