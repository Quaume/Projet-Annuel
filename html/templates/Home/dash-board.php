<?php
include "header-home.php";

unset($_SESSION['errors']);
unset($_SESSION['confirm']);
?>
<div class="container my-5">
    <div class="row">
        <div class="d-flex justify-content-between">
            <button class="btn btn-outline-dark" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                My Profile
            </button>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal"> Copyright requests</button>
        </div>

        <div class="d-flex d-flex align-items-center">
            <span class="d-block ms-3 ps-1" data-bs-toggle="popover" data-bs-trigger="hover focus">

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content bg-edit">
                            <div class="modal-header d-flex justify-content-center">
                                <h5 class="modal-title" id="exampleModalLabel">Confirm / Decline</h5>
                            </div>

                            <!-----------------------REQUEST PROFILE LIST GROUP----------------------->
                            <div class="modal-body">
                                <div class="overflow-auto" style="height:410px;">
                                    <!-----------------------BEATMAKER REQUEST----------------------->
                                    <h6 class="p-2 border-bottom title_rqst">Beatmaker</h6>
                                    <ul class="list-group list-group-light mb-4">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <img src="../../ressources/IMG-CONTENT/enceintes.png" alt=""
                                                    style="width: 45px; height: 45px" class="rounded-circle" />
                                                <div class="ms-3">
                                                    <p class="fw-bold mb-1 pr_usr_request">@Username</p>
                                                    <p class="text-muted mb-0"></p>
                                                </div>
                                            </div>
                                            <span class="badge rounded-pill badge-success">
                                                <button type="button" class="btn btn-outline-light me-3">Y</button>
                                                <button type="button" class="btn btn-outline-danger">N</button>
                                            </span>
                                        </li>
                                    </ul>
                                    <!-----------------------ARTIST REQUEST----------------------->
                                    <h6 class="p-2 border-bottom title_rqst">Artist</h6>
                                    <ul class="list-group list-group-light">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <img src="../../ressources/IMG-CONTENT/enceintes.png" alt=""
                                                    style="width: 45px; height: 45px" class="rounded-circle" />
                                                <div class="ms-3">
                                                    <p class="fw-bold mb-1 pr_usr_request">@Username</p>
                                                    <p class="text-muted mb-0"></p>
                                                </div>
                                            </div>
                                            <span class="badge rounded-pill badge-success">
                                                <button type="button" class="btn btn-outline-light me-3">Y</button>
                                                <button type="button" class="btn btn-outline-danger">N</button>
                                            </span>
                                        </li>
                                    </ul>
                                    <!-----------------------LISTENER REQUEST----------------------->
                                    <h6 class="p-2 border-bottom title_rqst mt-4">Listener</h6>
                                    <ul class="list-group list-group-light">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <img src="../../ressources/IMG-CONTENT/enceintes.png" alt=""
                                                    style="width: 45px; height: 45px" class="rounded-circle" />
                                                <div class="ms-3">
                                                    <p class="fw-bold mb-1 pr_usr_request">@Username</p>
                                                    <p class="text-muted mb-0"></p>
                                                </div>
                                            </div>
                                            <span class="badge rounded-pill badge-success">
                                                <button type="button" class="btn btn-outline-light me-3">Y </button>
                                                <button type="button" class="btn btn-outline-danger">N</button>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-bs-dismiss="modal" class="btn btn-outline-secondary"
                                    aria-label="Close">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </span>
        </div>
    </div>

    <!-- PROFILE USER -->

    <!-- MODALS -->
    <!-- Profile Picture -->
    <div class="modal fade" id="modalProfilePicture" tabindex="-1" role="dialog" aria-labelledby="modalProfilePictureLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content bg-edit">
                <div class="modal-header d-flex justify-content-evenly">
                    <h5 class="pr_modal p-2">my profile image</h5>
                </div>
                <div class="modal-body text-center form-group">
                <div class="d-flex justify-content-center mb-3">
                    <label>Current Image Profile : </label>
                </div>
                <div class="rounded-circle">
                    <?="<img class=border src=../../ressources/img-profile/".getUserImgById(getUserId())." width=100>";?> 
                </div>
                    <div class="overflow-auto" style="height: 180px;">
                        <form method="POST" action="../../functions/editedUser.php" enctype="multipart/form-data">
                            <input type="file" class="btn form-control-md text-center formsbtns mt-4 px-3 py-1 btn_f_v_edit" name="img-profile" accept=".png,.jpg,.jpeg"><br>
                            <input type="submit" class="btn form-control-md text-center formsbtns mt-5 px-3 py-1 btn_f_v_edit" value="Validate">
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-bs-dismiss="modal" class="btn btn_f_v_edit" aria-label="Close">Close</button>
                </div>
            </div>
        </div>
    </div>    
    
    <!-- Account -->
    <div class="modal fade" id="modalAccount" tabindex="-1" role="dialog" aria-labelledby="modalAccountLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content bg-edit">
                <div class="modal-header d-flex justify-content-evenly">
                    <h5 class="pr_modal p-2">Modify Your Account</h5>
                </div>

                <div class="modal-body text-center form-group">
                    <div class="overflow-auto" style="height:400px;">

                        <form method="POST" action="../../functions/editedUser.php" enctype="multipart/form-data">
                            <label class="mb-3 p-2">Current Username : <?php printf(getUserUsernameById(getUserId()),);?></label><br>
                            <label class="mb-3 p-2">Current Email : <?php printf(getUserEmailById(getUserId()),);?></label><br>
                            <input type="text" class="form-control edit-form" name="username" placeholder="New Username"><br>
                            <input type="email" class="form-control edit-form" name="email" placeholder="New Email"><br>
                            <input type="text" class="form-control edit-form" name="pwd" placeholder="New Password"><br>
                            <input type="submit" class="btn form-control-md text-center formsbtns mt-4 px-3 py-1 btn_f_v_edit" value="Validate">
                        </form>

                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" data-bs-dismiss="modal" class="btn btn_f_v_edit" aria-label="Close">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Followed Users -->
    <div class="modal fade" id="modalFollowed" tabindex="-1" role="dialog" aria-labelledby="modalFollowedLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content bg-edit">
                <div class="modal-header d-flex justify-content-evenly">
                    <h5 class="pr_modal py-2 px-3">You Follow Them</h5>
                </div>

                <div class="modal-body text-center">
                    <div class="overflow-auto" style="height:400px;">
                    <?php foreach(getUserFollowed(getUserId()) as $followed){
                    echo'
                        <img class="border me-2" src=../../ressources/img-profile/'.getUserImgById($followed[0]).' width=35>
                        <label class="mb-3 p-2 me-3">'.getUserUsernameById($followed[0]).
                        ' - '.getUserAccountTypeById($followed[0]).'</label>
                        <br>
                    ';
                    }
                    
                    
                    ?>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" data-bs-dismiss="modal" class="btn btn_f_v_edit" aria-label="Close">Close</button>
                </div>
            </div>
        </div>
    </div>    


    <!-- Followers of User -->
    <div class="modal fade" id="modalFollowers" tabindex="-1" role="dialog" aria-labelledby="modalFollowersLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content bg-edit">
                <div class="modal-header d-flex justify-content-evenly">
                    <h5 class="pr_modal py-2 px-3">They Follow You</h5>
                </div>

                <div class="modal-body text-center">
                    <div class="overflow-auto" style="height:400px;">
                    <?php foreach(getUserFollowers(getUserId()) as $followers){
                    echo'
                        <img class="border me-2" src=../../ressources/img-profile/'.getUserImgById($followers[0]).' width=35>
                        <label class="mb-3 p-2 me-3">'.getUserUsernameById($followers[0]).
                        ' - '.getUserAccountTypeById($followers[0]).'</label>
                        <br>
                    ';
                    }
                    
                    
                    ?>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" data-bs-dismiss="modal" class="btn btn_f_v_edit" aria-label="Close">Close</button>
                </div>
            </div>
        </div>
    </div>  

    <!--        -->

    <!-- Profil -->

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
                <img src="../../ressources/img-profile/<?php printf(getUserImgById(getUserId()));?>" class="rounded-circle profile">
            <h5 class="offcanvas-title ms-5" id="offcanvasExampleLabel"><?php printf(getUserUsernameById(getUserId()));?></h5>
            <br>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="d-flex justify-content-evenly followers">

            <a type="button" class="text-center list-group-item list-group-item-action" data-bs-toggle="modal"
                data-bs-target="#modalFollowers"><p>Followers<span class="badge">
                <?php printf(count(getUserFollowers(getUserId())));?></span></p>
            </a>

            <a type="button" class="text-center list-group-item list-group-item-action" data-bs-toggle="modal"
                data-bs-target="#modalFollowed"><p>Followed<span class="badge">
                <?php printf(count(getUserFollowed(getUserId())));?></span></p>
            </a>

        </div>
        <div class="offcanvas-body">
            <div>
                <div class="list-group">
                <a type="button" class="text-center list-group-item list-group-item-action" data-bs-toggle="modal"
                    data-bs-target="#modalProfilePicture">Change my profile image</a>
                <a href="#" class="text-center list-group-item list-group-item-action">Make an Avatar</a>
                <a type="button" class="text-center list-group-item list-group-item-action" data-bs-toggle="modal"
                    data-bs-target="#modalAccount">My Account</a>
                <a href="#" class="text-center list-group-item list-group-item-action">Edit Bio</a>

                <?php
                if(isAdmin()){
                    echo'
                    <a href="../../admin_page.php?display=users" class="text-center list-group-item list-group-item-action">Admins Dashboard</a>
                    ';
                }
                ?>

                </div>
            </div>

            <div class="d-flex justify-content-evenly mt-3 mb-2">
                <a href="../../utrack_forum/main/forum.php">
                    <button class="btn btn-outline-light">
                        Join The Forum !
                    </button>
                </a>
            </div>
            <div class="d-flex justify-content-evenly mt-3 mb-2">
                <?php
                    if(empty(isSubscribedToNewsletter())){
                        echo'<a href="../../functions/addToNewsLetter.php" class="btn btn-outline-light">Subscribe to newsletter</a>';
                    }else{
                        echo'<a href="../../functions/removeFromNewsLetter.php" class="btn btn-outline-light">Unsubscribe from newsletter</a>';   
                    }
                ?>
            </div>
        </div>

        <footer class="">
            <div class="d-flex justify-content-center">
                <p class="fs-6 fw-light mb-2 mt-2 border-bottom">About Me</p>
                <br>
            </div>
            <p class="text-center mb-1">Hello Utrack !</p>

            <div class="d-flex justify-content-center">
                <p class="fs-6 fw-light mb-2 mt-2 border-top">Registered Since <?php printf(getUserDateInsertedById(getUserId())); ?></p>
                <br>
            </div>
        </footer>
    </div>
    <div class="row mt-5 d-flex justify-content-center">

    <!-------------------------------------------------BLOCK BLOCK------------------------------------------------------------>
        <div class="p-2 ps-3 pe-3 block1 col-lg-4 col-md-12 mt-4 me-sm-3">
            <div class="d-flex justify-content-center">

                <div class="dropdown d-flex align-items-center mt-2">

                    <select class="form-select" aria-label="Default select example">
                        <option value="1" selected>This week</option>
                        <option value="2">Last Month</option>
                    </select>
                </div>
            </div>
            <div class="mt-1">
                <ul class="list-group">
                    <li class="list-group-item px-3 border-0 rounded-3 list-group-item-primary  text-center">
                        <p class="subtitle darkB p-3">
                        <img class="me-3" src="../../ressources/IMG-CONTENT/eye.png" width="30">    
                        Views<span class="badge rounded-pill">200</span></p>
                    </li>
                    <li class="list-group-item px-3 border-0 rounded-3 list-group-item-primary  text-center">
                        <p class="subtitle darkB p-3">
                        <img class="me-3" src="../../ressources/IMG-CONTENT/like.png" width="30">    
                        Likes<span class="badge rounded-pill">200</span></p>
                    </li>
                    <li class="list-group-item px-3 border-0 rounded-3 list-group-item-primary  text-center">
                        <p class="subtitle darkB p-3">
                        <img class="me-3" src="../../ressources/IMG-CONTENT/bubble.png" width="30">    
                        Comments<span class="badge rounded-pill">200</span></p>
                    </li>
                    <li class="list-group-item px-3 border-0 rounded-3 list-group-item-primary  text-center">
                        <p class="subtitle darkB p-3">
                        <img class="me-3" src="../../ressources/IMG-CONTENT/Request.png" width="30">    
                        Requests<span class="badge rounded-pill">200</span></p>
                    </li>
                </ul>
            </div>
        </div>
        <!-------------------------------------------------STATUS BLOCK-------------------------------------------------------------->
        <div class="mt-4 p-2 ps-4 col-lg-4 col-md-12  me-sm-3">
            <div class="row firstRow">
                <div class="col-5 statsBlock pb-4 overflow-auto">
                    <p class="subtitle darkB text-center ms-2 mt-3 mb-2 p-1 recentlyPost">Posted Tracks</p>
                    <div class="">
                        <div class="overflow-auto" style="height: 120px;">
                            <ul class="list-group list-group-light">
                                <?php foreach(getUserTracksById(getUserId()) as $track){ 

                                echo '
                                
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <img src="../../ressources/tracks_cover/'.$track['img_profile'].'" alt="track_cover"
                                        style="width: 45px; height: 45px" class="rounded" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">'.$track["title"].'</p>
                                        <p class="text-muted mb-0"></p>
                                    </div>
                                    <audio
                                        controls
                                    src="../../ressources/tracks/'.$track['trackName'].'">
                                    Your browser does not support the
                                    <code>audio</code> element.
                                    </audio>
                                </div>
                                </li>
                                
                                ';
                                } ?>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-2"></div>
                <!-------------------RECENTLY POST------------------->
                <div class="col-5 statsBlock pb-4">
                    <div class="d-flex align-items-center">
                        <div class="dash-block d-flex flex-wrap justify-content-center">
                            <p class="subtitle darkB text-center mt-3 pt-1 recentlyPost">Recently Post</p>
                            <div class="recentlyBlock d-flex justify-content-center mt-3">
                                <div class="d-flex align-items-center">
                                    <img src="../../ressources/IMG-CONTENT/pulse.png" class="pulse1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-------------------------------------------------FAVORIS TRACK BLOCK-------------------------------------------------------------->
            <div class="row statsBlock mt-3">
                <div class="col-3"></div>
                <div class="col-6">
                    <div class="mt-2">
                        <h5 class="text-center subtitle fw-light darkB">FAVORIS TRACK</h5>
                    </div>
                </div>
                <div class="col-3"></div>
                <div class="overflow-auto" style="height: 107px;">
                    <ul class="list-group list-group-light">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <img src="../../ressources/IMG-CONTENT/K-dot.jpeg" alt=""
                                    style="width: 45px; height: 45px" class="rounded" />
                                <div class="ms-3">
                                    <p class="fw-bold mb-1">Track Name</p>
                                    <p class="text-muted mb-0"></p>
                                </div>
                            </div>
                            <a class="btn btn-link btn-rounded btn-sm" data-bs-toggle="modal" data-bs-target="#listenModal" role="button">Listen</a>
                        </li>
                        <!-- Listen Modal -->
                        <div class="modal fade" id="listenModal" tabindex="-1" aria-labelledby="listenModal" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title listenTitle" id="listenModal">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                                </div>
                            </div>
                        </div>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <img src="../../ressources/IMG-CONTENT/K-dot.jpeg" class="rounded" alt=""
                                    style="width: 45px; height: 45px" />
                                <div class="ms-3">
                                    <p class="fw-bold mb-1">Track Name</p>
                                    <p class="text-muted mb-0"></p>
                                </div>
                            </div>
                            <a class="btn btn-link btn-rounded btn-sm" href="#" role="button">Listen</a>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <img src="../../ressources/IMG-CONTENT/K-dot.jpeg" class="rounded" alt=""
                                    style="width: 45px; height: 45px" />
                                <div class="ms-3">
                                    <p class="fw-bold mb-1">Track Name</p>
                                    <p class="text-muted mb-0"></p>
                                </div>
                            </div>

                            <a class="btn btn-link btn-rounded btn-sm" href="#" role="button">Listen</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-------------------------------------------------EDIT BLOCK-------------------------------------------------------------->
        <div class="p-2 block1 col-lg-4 col-md-12 mt-4 ms-3">
            <div class="row p-2">
                <div class="col-6 mt-3">
                    <!---CREATE TRACK------>
                    <div class="d-inline-flex p-3">
                        <!-- Button trigger modal -->
                        <div class="">
                            <button type="button" class="btn darkBlockTr" data-bs-toggle="modal" data-bs-target="#createTrackModal">
                                <img src="../../ressources/IMG-CONTENT/note.png" width="50" alt="">
                                <p class="subtitle pt-2">Create Track</p>
                            </button>
                        </div>

                <!-- Modal Create track-->
                <div class="modal fade" id="createTrackModal">
                    <div class="modal-dialog">
                        <div class="modal-content bg-edit">
                            <div class="modal-header"></div>
                                <div class="modal-body">
                                    <form class="row g-3" method="POST" action="../../functions/uploadTrack.php" enctype="multipart/form-data">
                                                <div class="d-flex flex-column mb-3">
                                                    <div class="col-md-8">
                                                        <label for="inputTitle" class="form-label p-2">Title</label>
                                                        <input type="text" name="title" class="form-control" id="inputTitle" placeholder="New Track">
                                                    </div>
                                        
                                        <div class="col-md-4 mt-3">
                                            <label for="trackType" class="form-label p-2">Track Type</label>
                                            <select id="trackType" name="trackType" class="form-select">
                                            <option selected="">Beat</option>
                                            <option>Trap</option>
                                            <option>Rap / Old School</option>
                                            <option>R&amp;B</option>
                                            <option>Pop Rock</option>
                                            <option>Latin Pop</option>
                                            <option>Uk Drill</option>
                                            <option>Jersey Concept</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="">
                                        <label for="track" class="form-label p-2">Choose your track</label>
                                        <input type="file" name="track" id="track" class="form-control form-control-md" accept="audio/mp3">
                                        <label for="trackCover" class="form-label p-2 mt-2">Choose the cover for your track</label>
                                        <input type="file" name="trackCover" id="trackCover" class="form-control form-control-md" accept=".png,.jpg,.jpeg">
                                    </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" data-bs-target="#createTrackModal">Close</button>
                                        <input type="submit" class="btn btn-outline-secondary" value="Create Track">
                                    </div>
                                    </form> 
                                </div>
                            </div>
                        </div>

                    </div>
                    
                    <div class="d-inline-flex p-3">
                        <!-- Button trigger modal -->
                        <div class="mt-3">
                            <button type="button" class="btn darkBlockF" data-bs-toggle="modal" data-bs-target="#myFirstModal2">
                                <img src="../../ressources/IMG-CONTENT/doc.png" width="50" alt="">
                                <p class="subtitle pt-2">My Files</p>
                            </button>
                        </div>
                        <!-- Modal File track-->
                        <div class="modal fade" id="myFirstModal2">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content bg-edit">
                                    <div class="modal-header">My File</div>
                                    <div class="modal-body"></div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" data-bs-target="#myFirstModal2">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 mt-3">
                <div class="d-inline-flex p-3 mb-3">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn darkBlockA" data-bs-toggle="modal" data-bs-target="#createAlbumModal">
                            <img src="../../ressources/IMG-CONTENT/vinyl.png" width="50" alt="">
                            <p class="subtitle pt-2">Create Album</p>
                        </button>

                        <!-- Modal Album-->
                        <div class="modal fade" id="createAlbumModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content bg-edit">
                                    <div class="modal-header"></div>
                                    <div class="modal-body">
                                    <form class="row g-3">
                                    <div class="d-flex flex-column mb-3">
                                        <div class="col-md-8">
                                            <label for="inputTitle" class="form-label">Title</label>
                                            <input type="text" class="form-control" id="inputTitle" placeholder="Album Name">
                                        </div>
                                        
                                        <div class="col-md-4 mt-5">
                                            <label for="trackType" class="form-label">Album Type</label>
                                            <select id="trackType" class="form-select">
                                            <option selected="">Beat</option>
                                            <option>Trap</option>
                                            <option>Rap / Old School</option>
                                            <option>R&amp;B</option>
                                            <option>Pop Rock</option>
                                            <option>Latin Pop</option>
                                            <option>Uk Drill</option>
                                            <option>Jersey Concept</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="">
                                        <label for="formFilemd" class="form-label">Choose the cover for your album</label>
                                        <input class="form-control form-control-md" id="formFilemd" type="file">
                                    </div>

                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" data-bs-target="#createAlbumModal">Close</button>
                                        <input type="submit" class="btn btn-outline-secondary" value="Create Album">
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="d-inline-flex p-3 mb-5">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn darkBlockN" data-bs-toggle="modal" data-bs-target="#myFirstModal4">
                            <img src="../../ressources/IMG-CONTENT/notif.png" width="40" alt="">
                            <p class="subtitle pt-2">Create Track</p>
                        </button>

                        <!-- Modal Notif-->
                        <div class="modal fade" id="myFirstModal4">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content bg-edit">
                                    <div class="modal-header">NOTIF</div>
                                    <div class="modal-body"></div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" data-bs-target="#myFirstModal4">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<footer class="mt-5">
    <?php include 'footer-home.php';  ?>
</footer>