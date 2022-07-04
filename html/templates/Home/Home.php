<?php
include "header-home.php";

if(!isConnected()){
	die(header("Location: ../../LR_SESSIONS/signIn.php"));
}


?>

<!-- CAROUSEL -->
<div class="container my-5 p-5">
    <div class="row">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../../ressources/IMG-CONTENT/welcome.png" class="d-block w-100" alt="A la une">
                </div>
                <div class="carousel-item">
                    <img src="../../ressources/IMG-CONTENT/carouseul2.png" class="d-block w-100" alt="A la une">
                </div>
            </div>
        </div>
    </div>
</div>

<!--TRACK BLOCK-->
<div class="container my-5 py-5">
    <?php foreach (getAllTracks() as $track){
                ?>
    <div class="row">
        <img src="../../ressources/tracks_cover/<?=$track['img_profile']?>" class="rounded mx-auto d-block pulse block"
            alt="...">
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <h4 class="title font-weight-bold text-center"><?=$track['title']?></h4>
                <p class="blockquote-footer text-center">Made By <cite
                        title="Source title"><?=getUserUsernameById($track['artist'])?></p>
            </blockquote>
        </div>
    </div>
    <?php
        }
        ?>

</div>
<!--FOOTER-->
<footer class="">
    <?php include "footer-home.php"?>
</footer>
</body>

</html>