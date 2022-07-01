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

        if(stristr($q, substr($title, 0, $length))){ 
            if($hint === ""){
                $hint = '<div class="show toast" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header">
                                <img src="../../ressources/IMAGES-HEADER/icon.png" class="rounded me-2" width="25" alt="...">
                                <strong class="me-auto">Utrack</strong>
                                <small>'.$dateOfRelease.'</small>
                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                                <div class="d-flex justify-content-between">
                                    <a href="#!">
                                        <img src="../../ressources/tracks_cover/'.getImgTrackById($id_track).'" class="rounded" style="width: 50px; height: 50px" ">                         
                                    </a>
                                    <p class="d-flex align-items-center">
                                    '.$title.'
                                    </p><br>
                                </div>
                                <p class="text-end">'.$category.'</p>
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