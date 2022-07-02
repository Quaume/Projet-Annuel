<?php
include "header-home.php";

unset($_SESSION['errors']);
unset($_SESSION['confirm']);

$id = $_GET['user'];

?>
<div class="container">
    <div class="row d-flex justify-content-center">

    <!-- Profil User -->
        <div class="p-2 ps-3 pe-3 block1 col-lg-4 col-md-12 mt-4 me-sm-3">
            <div class="text-center">

                <div class="row">
                    <h3>Profile</h3>
                </div>

                <div class="row mt-5">
                    <div class="col-12  text-center">
                        <div class="rounded-circle mb-3">
                            <?="<img class=border src=../../ressources/img-profile/".getUserImgById($id)." width=50>";?> 
                        </div>
                        Username :
                        <?php
                            printf(getUserUsernameById($id));
                        ?>
                    </div>
                </div>

                <div class="row mt-5 text-center">
                    <div class="col-12  text-center">
                        Account Type :
                        <?php
                            printf(ucwords(getUserAccountTypeById($id)));
                        ?>
                    </div>
                </div>

                <div class="row mt-5 text-center">
                    <div class="col-12  text-center">
                        Registered Since :
                        <?php
                             printf(getUserDateInsertedById($id));
                        ?>
                    </div>
                </div>

            </div>
        </div>
    <!-----------------> 




    <!-- Albums -->
        <div class="p-2 ps-3 pe-3 block1 col-lg-4 col-md-12 mt-4 me-sm-3">
            <div class="text-center">

                <div class="row">
                    <h3>Albums</h3>
                </div>

                <div class="row overflow-auto mt-5"  style="height: 225 px;">
                    <h3>Profile</h3><br>
                    <h3>Profile</h3><br>
                    <h3>Profile</h3><br>
                    <h3>Profile</h3><br>
                    <h3>Profile</h3><br>
                    <h3>Profile</h3><br>
                </div>
        
            </div>
        </div>
    <!-----------------> 




    <!-- Tracks -->
        <div class="p-2 ps-3 pe-3 block1 col-lg-4 col-md-12 mt-4 me-sm-3">
            <div class="text-center">
                <div class="row">
                    <h3>Tracks</h3>
                </div>

                <div class="row overflow-auto mt-5 text-center"  style="height: 225 px;">
                    <ul class="list-group list-group-light">
                        <?php foreach(getRecentUserTracksById($id) as $track){ 

                            echo '
                                
                            <li class="list-group-item d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <a class="text-decoration-none fw-bold mb-1 userLink" data-bs-toggle="modal" data-bs-target="#listenModal'.$track['id'].'">
                                        <img src="../../ressources/tracks_cover/'.$track['img_profile'].'" alt="track_cover" style="width: 45px; height: 45px" class="rounded mx-2"/>
                                        '.$track["title"].'
                                    </a>

                                </div>
                            </li>

                            <!-- Listen Modal -->
                                <div class="modal fade" id="listenModal'.$track['id'].'" tabindex="-1" aria-labelledby="listenModal'.$track['id'].'" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title listenTitle" id="listenModal'.$track['id'].'">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body modalAudio">
                                                <audio class="playerAudio" src="../../ressources/tracks/'.$track['trackName'].'"></audio>
                                                    <div class="player">
                                                        <div class="control">
                                                            <i class="fas fa-play" id="playBtn"></i>
                                                        </div>
                                                        <div class="info">'.$track['title'].'
                                                            <div class="bar">
                                                                <div id="progress"></div>
                                                            </div>
                                                        </div>
                                                        <div class="" id="current">O:00</div>
                                                    </div>
                                                <script src="./player.js"></script>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                     </div>
                                </div>
                                
                                ';
                                } ?>

                            </ul>
                
                </div>
            </div>
        </div>
    <!-----------------> 
 
    </div>
</div>
</body>
<footer class="mt-5">
    <?php include 'footer-home.php';  ?>
</footer>