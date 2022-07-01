<?php

getAllTracks();

$hint = "";

if(isset($_GET['search'])){

    $q = $_REQUEST["search"];



if($q !== ""){
    $q = strtolower($q);
    $length = strlen($q);
    foreach(getAllTracks() as  $track){
        
        $artist = $track['artist'];
        $title = $track['title'];
        $category = $track['category'];
        $dateOfRelease = $track['dateOfRelease'];
        $imgProfile = $track['img_profile'];
        $id_track = $track['id'];
        $trackName = $track['trackName'];

        if(stristr($q, substr($title, 0, $length))){ 
            if($hint === ""){
                $hint = '<div class="show toast" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header">
                                <img src="../../ressources/IMAGES-HEADER/icon.png" class="rounded me-2" width="25">
                                    <strong class="me-auto">Utrack</strong>
                                <small>'.$dateOfRelease.'</small>
                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                                <div class="d-flex justify-content-between">
                                    <a href="../../ressources/tracks/'.$trackName.'" data-bs-toggle="modal" data-bs-target="#listenModal'.$id_track.'">
                                        <img src="../../ressources/tracks_cover/'.getImgTrackById($id_track).'" class="rounded" style="width: 50px; height: 50px" ">                         
                                    </a>
                                    <p class="d-flex align-items-center">
                                    '.$title.'
                                    </p><br>
                                </div>
                                <p class="text-end">'.$category.'</p>
                            </div>
                        </div>
                        
                        <div class="modal fade" id="listenModal'.$id_track.'" tabindex="-1" aria-labelledby="listenModal'.$id_track.'" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body modalAudio">
                                                <audio id="player" src="../../ressources/tracks/'.$trackName.'"></audio>
                                                    <div class="player">
                                                        <div class="control">
                                                            <i class="fas fa-play" id="playbtn"></i>
                                                        </div>
                                                        <div class="info">'.$title.'
                                                            <div class="bar">
                                                                <div id="progress" role="progressbar"></div>
                                                            </div>
                                                        </div>
                                                        <div class="" id="current">O:00</div>
                                                    </div>
                                                <script src="./player.js"></script>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>';
            } else {
                //$hint .= ", $title";
            }
        }
    }
}
}
?>