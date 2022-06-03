<?php
    include "header-home.php";
?>
    <!-- CAROUSEL -->
    <div class="container mt-5 pb-5">
        <div class="row">
            
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
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
    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-around mt-5">
                <div class="block"> <img class="pulse" src="../../ressources/IMG-CONTENT/pulse.png"></div>
                <div class="block"> <img class="pulse" src="../../ressources/IMG-CONTENT/pulse.png"></div>
                <div class="block"> <img class="pulse" src="../../ressources/IMG-CONTENT/pulse.png"></div>
            </div>
        </div>
        <div class="row pb-5 mb-5">
            <div class="d-flex justify-content-around mt-3">
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <h4 class="title font-weight-bold text-center">Track Title</h4>
                        <p class="blockquote-footer text-center">Made By <cite title="Source title">Flacko..</p>
                    </blockquote>
                </div>

                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <h4 class="title font-weight-bold text-center">Track Title</h4>
                        <p class="blockquote-footer text-center">Made By <cite title="Source Title">Flacko..</p>
                    </blockquote>
                </div>

                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <h4 class="title font-weight-bold text-center">Track Title</h4>
                        <p class="blockquote-footer text-center">Made By <cite title="Source Title">Flacko..</p>
                    </blockquote>
                </div>

            </div>
        </div>
    </div>
    <!--FOOTER-->
    <footer>
        <?php include "footer-home.php"?>
    </footer>