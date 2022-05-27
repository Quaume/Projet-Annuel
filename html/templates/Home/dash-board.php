<?php
include "header-home.php"; 
?>
<div class="container mt-3 mb-5">
    <div class="row">
        <div class="d-block p-2 col-10">
            <button class="btn btn-outline-dark" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                My Profile
            </button>
        </div>

        <div class="d-block p-2 col-2  d-flex align-items-center">
            <span class="d-block ms-3 ps-1" data-bs-toggle="popover" data-bs-trigger="hover focus">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">My Rights Requests</button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Confirm / Decline</h5>
                            </div>

                            <!-----------------------REQUEST PROFILE LIST GROUP----------------------->
                            <div class="modal-body">
                                <div class="overflow-auto" style="height:410px;">
                                    <!-----------------------BEATMAKER REQUEST----------------------->
                                    <h6 class="p-2 border-bottom border-dark">Beatmaker</h6>
                                    <ul class="list-group list-group-light mb-4">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <img src="../../ressources/IMG-CONTENT/enceintes.png" alt=""
                                                    style="width: 45px; height: 45px" class="rounded-circle" />
                                                <div class="ms-3">
                                                    <p class="fw-bold mb-1">@Username</p>
                                                    <p class="text-muted mb-0"></p>
                                                </div>
                                            </div>
                                            <span class="badge rounded-pill badge-success">
                                                <button type="button" class="btn btn-outline-light">Y</button>
                                                <button type="button" class="btn btn-outline-light">N</button>
                                            </span>
                                        </li>
    
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <img src="../../ressources/IMG-CONTENT/enceintes.png" class="rounded-circle"
                                                    alt="" style="width: 45px; height: 45px" />
                                                <div class="ms-3">
                                                    <p class="fw-bold mb-1">@Username</p>
                                                    <p class="text-muted mb-0"></p>
                                                </div>
                                            </div>
                                            <span class="badge rounded-pill badge-success">
                                                <button type="button" class="btn btn-outline-light">Y</button>
                                                <button type="button" class="btn btn-outline-light">N</button>
                                            </span>
                                        </li>
                                    </ul>
                                    <!-----------------------ARTIST REQUEST----------------------->
                                    <h6 class="p-2 border-bottom border-dark">Artist</h6>
                                    <ul class="list-group list-group-light">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <img src="../../ressources/IMG-CONTENT/enceintes.png" alt=""
                                                    style="width: 45px; height: 45px" class="rounded-circle" />
                                                <div class="ms-3">
                                                    <p class="fw-bold mb-1">@Username</p>
                                                    <p class="text-muted mb-0"></p>
                                                </div>
                                            </div>
                                            <span class="badge rounded-pill badge-success">
                                                <button type="button" class="btn btn-outline-light">Y</button>
                                                <button type="button" class="btn btn-outline-light">N</button>
                                            </span>
                                        </li>
    
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <img src="../../ressources/IMG-CONTENT/enceintes.png" class="rounded-circle"
                                                    alt="" style="width: 45px; height: 45px" />
                                                <div class="ms-3">
                                                    <p class="fw-bold mb-1">@Username</p>
                                                    <p class="text-muted mb-0"></p>
                                                </div>
                                            </div>
                                            <span class="badge rounded-pill badge-success">
                                                <button type="button" class="btn btn-outline-light">Y</button>
                                                <button type="button" class="btn btn-outline-light">N</button>
                                            </span>
                                        </li>
                                    </ul>
                                    <!-----------------------LISTENER REQUEST----------------------->
                                    <h6 class="p-2 border-bottom border-dark mt-4">Listener</h6>
                                    <ul class="list-group list-group-light">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <img src="../../ressources/IMG-CONTENT/enceintes.png" alt=""
                                                    style="width: 45px; height: 45px" class="rounded-circle" />
                                                <div class="ms-3">
                                                    <p class="fw-bold mb-1">@Username</p>
                                                    <p class="text-muted mb-0"></p>
                                                </div>
                                            </div>
                                            <span class="badge rounded-pill badge-success">
                                                <button type="button" class="btn btn-outline-light">Y </button>
                                                <button type="button" class="btn btn-outline-light">N</button>
                                            </span>
                                        </li>
    
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <img src="../../ressources/IMG-CONTENT/enceintes.png" class="rounded-circle"
                                                    alt="" style="width: 45px; height: 45px" />
                                                <div class="ms-3">
                                                    <p class="fw-bold mb-1">@Username</p>
                                                    <p class="text-muted mb-0"></p>
                                                </div>
                                            </div>
                                            <span class="badge rounded-pill badge-success">
                                                <button type="button" class="btn btn-outline-light">Y </button>
                                                <button type="button" class="btn btn-outline-light">N</button>
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
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <a href="#" alt="Modify my profile">
                <img src="../../ressources/IMG-CONTENT/enceintes.png" class="rounded-circle profile">
            </a>
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">@Username</h5>
            <br>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="d-flex justify-content-evenly followers">
            <p>Followers<span class="badge">300</span></p>
            <p>Track created<span class="badge">20</span></p>
        </div>
        <div class="offcanvas-body">
            <div>
                <div class="list-group">
                    <a href="#" class="text-center list-group-item list-group-item-action">Change my profile image</a>
                    <a href="#" class="text-center list-group-item list-group-item-action">Make an Avatar</a>
                    <a href="../../functions/testback.php" class="text-center list-group-item list-group-item-action">My Account</a>
                    <a href="#" class="text-center list-group-item list-group-item-action">Edit Bio</a>
                </div>
            </div>

            <div class="d-flex justify-content-evenly mt-3 mb-2">
                <a href="../utrackForum/forum.php">
                    <button class="btn btn-outline-light">
                        Join The Forum !
                    </button>
                </a>
            </div>
        </div>
        <footer class="">
            <div class="d-flex justify-content-center">
                <p class="fs-6 fw-light mb-2 mt-2 text-decoration-underline">About Me</p>
                <br>
            </div>
            <p class="text-center mb-1">Hello Utrack !</p>

            <div class="d-flex justify-content-center">
                <p class="fs-6 fw-light mb-2 mt-2 border-top">Registered Since DD/MM/YYYY</p>
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
                    <li class="list-group-item px-3 border-0 rounded-3 list-group-item-primary  text-center mb-2">
                        <p class="subtitle darkB p-3">
                        <img src="../../ressources/IMG-CONTENT/eye.png" width="30">    
                        Views<span class="badge rounded-pill">200</span></p>
                    </li>
                    <li class="list-group-item px-3 border-0 rounded-3 list-group-item-primary  text-center mb-2">
                        <p class="subtitle darkB p-3">
                        <img src="../../ressources/IMG-CONTENT/like.png" width="30">    
                        Views<span class="badge rounded-pill">200</span></p>
                    </li>
                    <li class="list-group-item px-3 border-0 rounded-3 list-group-item-primary  text-center mb-2">
                        <p class="subtitle darkB p-3">
                        <img src="../../ressources/IMG-CONTENT/bubble.png" width="30">    
                        Views<span class="badge rounded-pill">200</span></p>
                    </li>
                    <li class="list-group-item px-3 border-0 rounded-3 list-group-item-primary  text-center mb-2">
                        <p class="subtitle darkB p-3">
                        <img src="../../ressources/IMG-CONTENT/Request.png" width="30">    
                        Views<span class="badge rounded-pill">200</span></p>
                    </li>
                </ul>
            </div>
        </div>
        <!-------------------------------------------------STATUS BLOCK-------------------------------------------------------------->
        <div class="mt-4 p-2 ps-4 col-lg-4 col-md-12  me-sm-3">
            <div class="row">
                <div class="col-5 statsBlock pb-4 overflow-auto">
                    <p class="subtitle darkB text-center ms-2 mt-3 mb-2 recentlyPost">Unfinished</p>
                    <div class="">
                        <div class="overflow-auto" style="height: 120px;">
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

                                </li>
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
                                    <img src="../../ressources/IMG-CONTENT/pulse.png" class="pulse">
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
                            <a class="btn btn-link btn-rounded btn-sm" href="#" role="button">View</a>
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
                            <a class="btn btn-link btn-rounded btn-sm" href="#" role="button">View</a>
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

                            <a class="btn btn-link btn-rounded btn-sm" href="#" role="button">View</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-------------------------------------------------EDIT BLOCK-------------------------------------------------------------->
        <div class="p-2 block1 col-lg-4 col-md-12 mt-4 ms-3">
            <div class="row">
                <div class="col-6 mt-3">
                    <!---CREATE TRACK------>
                    <div class="d-inline-flex p-2">
                        <!-- Button trigger modal -->
                        <div class="">
                            <button type="button" class="btn darkBlock" data-bs-toggle="modal"
                                data-bs-target="#myFirstModal">
                                <img src="../../ressources/IMG-CONTENT/note.png" width="60" alt="">
                                <p class="subtitle pt-1">Create Track</p>
                            </button>
                        </div>

                        <!-- Modal Create track-->
                        <div class="modal fade" id="myFirstModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header"></div>
                                    <div class="modal-body">
                                    <form class="row g-3">
                                    <div class="d-flex flex-column mb-3">
                                        <div class="col-md-8">
                                            <label for="inputTitle" class="form-label">Title*</label>
                                            <input type="text" class="form-control" id="inputTitle" placeholder="New Track">
                                        </div>
                                        
                                        <div class="col-md-4 mt-5">
                                            <label for="trackType" class="form-label">TRACK TYPE</label>
                                            <select id="trackType" class="form-select">
                                            <option selected>Beat..</option>
                                            <option>Trap</option>
                                            <option>Rap / Old School</option>
                                            <option>R&B</option>
                                            <option>Pop Rock</option>
                                            <option>Latin Pop</option>
                                            <option>Uk Drill</option>
                                            <option>Jersey Concept</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="">
                                        <label for="formFileLg" class="form-label">Large file input example</label>
                                        <input class="form-control form-control-lg" id="formFileLg" type="file">
                                    </div>
                                    </form>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" data-bs-target="#myFirstModal">Close</button>
                                        <button type="submit" class="btn btn-primary">Create Track</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-inline-flex p-2">
                        <!-- Button trigger modal -->
                        <div class="mt-5">
                            <button type="button" class="btn darkBlockF" data-bs-toggle="modal"
                                data-bs-target="#myFirstModal2">
                                <img src="../../ressources/IMG-CONTENT/doc.png" width="60" alt="">
                                <p class="subtitle pt-1">My Files</p>
                            </button>
                        </div>
                        <!-- Modal File track-->
                        <div class="modal fade" id="myFirstModal2">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
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
                <div class="d-inline-flex p-2 mb-5">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn darkBlock" data-bs-toggle="modal"
                            data-bs-target="#myFirstModal3">
                            <img src="../../ressources/IMG-CONTENT/vinyl.png" width="55" alt="">
                            <p class="subtitle pt-1">Create Album</p>
                        </button>

                        <!-- Modal Album-->
                        <div class="modal fade" id="myFirstModal3">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header"></div>
                                    <div class="modal-body">
                                    <form class="row g-3">
                                    <div class="d-flex flex-column mb-3">
                                        <div class="col-md-8">
                                            <label for="inputTitle" class="form-label">Title*</label>
                                            <input type="text" class="form-control" id="inputTitle" placeholder="New Track">
                                        </div>
                                        
                                        <div class="col-md-4 mt-5">
                                            <label for="trackType" class="form-label">TRACK TYPE</label>
                                            <select id="trackType" class="form-select">
                                            <option selected>Beat..</option>
                                            <option>Trap</option>
                                            <option>Rap / Old School</option>
                                            <option>R&B</option>
                                            <option>Pop Rock</option>
                                            <option>Latin Pop</option>
                                            <option>Uk Drill</option>
                                            <option>Jersey Concept</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="">
                                        <label for="formFileLg" class="form-label">Large file input example</label>
                                        <input class="form-control form-control-lg" id="formFileLg" type="file">
                                    </div>
                                    </form>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" data-bs-target="#myFirstModal3">Close</button>
                                        <button type="submit" class="btn btn-primary">Create Album</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="d-inline-flex p-2 mb-5">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn darkBlock" data-bs-toggle="modal"
                            data-bs-target="#myFirstModal4">
                            <img src="../../ressources/IMG-CONTENT/notif.png" width="60" alt="">
                            <p class="subtitle pt-1">Create Track</p>
                        </button>

                        <!-- Modal Notif-->
                        <div class="modal fade" id="myFirstModal4">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
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