<?php include "header-home.php"; ?>
<div class="container mt-5">

    <div class="row">
        <div class="d-block p-2 col-10">
            <span class="d-inline">
                <a href="#">
                    <img src="../../ressources/IMG-CONTENT/dosV.png" class="profile" alt="profile">
                </a>
            </span>
            <span class="d-inline font-weight-light ps-1 userProfile">
                <a href="#">@Username</a>
            </span>
        </div>

        <div class="d-block p-2 col-2  d-flex align-items-center">
            <span class="d-block ms-3 ps-1" data-bs-toggle="popover" data-bs-trigger="hover focus">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModal">My request Rights</button>
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Confirm / Decline</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!-----------------------REQUEST PROFILE LIST GROUP----------------------->
                        <div class="modal-body">
                        <!-----------------------BEATMAKER REQUEST----------------------->
                        <h6 class="p-2 border-bottom">Beatmaker</h6>
                            <ul class="list-group list-group-light mb-4">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                    <img src="../../ressources/IMG-CONTENT/enceintes.png" alt="" style="width: 45px; height: 45px"class="rounded-circle" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">@Username</p>
                                        <p class="text-muted mb-0"></p>
                                    </div>
                                    <span class="badge rounded-pill badge-success">
                                        <button type="button" class="btn btn-outline-info">Y</button>
                                        <button type="button" class="btn btn-outline-info">N</button>
                                    </span>
                                    </div>
                                </li>

<<<<<<< Updated upstream
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                    <img src="../../ressources/IMG-CONTENT/enceintes.png" class="rounded-circle" alt=""style="width: 45px; height: 45px" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">@Username</p>
                                        <p class="text-muted mb-0"></p>
                                    </div>
                                    </div>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                    <img src="../../ressources/IMG-CONTENT/enceintes.png" class="rounded-circle" alt=""style="width: 45px; height: 45px" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">@Username</p>
                                        <p class="text-muted mb-0"></p>
                                    </div>
                                    <span class="badge rounded-pill badge-success">
                                        <button type="button" class="btn btn-outline-info">Y</button>
                                        <button type="button" class="btn btn-outline-info">N</button>
                                    </span>
                                    </div>
                                </li>
                            </ul>
                        <!-----------------------ARTIST REQUEST----------------------->
                        <h6 class="p-2 border-top border-bottom">Artist</h6>
                            <ul class="list-group list-group-light">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                    <img src="../../ressources/IMG-CONTENT/enceintes.png" alt="" style="width: 45px; height: 45px"class="rounded-circle" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">@Username</p>
                                        <p class="text-muted mb-0"></p>
                                    </div>
                                    <span class="badge rounded-pill badge-success">
                                        <button type="button" class="btn btn-outline-info">Y</button>
                                        <button type="button" class="btn btn-outline-info">N</button>
                                    </span>
                                    </div>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                    <img src="../../ressources/IMG-CONTENT/enceintes.png" class="rounded-circle" alt=""style="width: 45px; height: 45px" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">@Username</p>
                                        <p class="text-muted mb-0"></p>
                                    </div>
                                    <span class="badge rounded-pill badge-success">
                                        <button type="button" class="btn btn-outline-info">Y</button>
                                        <button type="button" class="btn btn-outline-info">N</button>
                                    </span>
                                    </div>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                    <img src="../../ressources/IMG-CONTENT/enceintes.png" class="rounded-circle" alt=""style="width: 45px; height: 45px" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">@Username</p>
                                        <p class="text-muted mb-0"></p>
                                    </div>
                                    <span class="badge rounded-pill badge-success">
                                        <button type="button" class="btn btn-outline-info">Y</button>
                                        <button type="button" class="btn btn-outline-info">N</button>
                                    </span>
                                    </div>
                                </li>
                            </ul>
                            <!-----------------------LISTENER REQUEST----------------------->
                        <h6 class="p-2 border-top border-bottom">listener</h6>
                            <ul class="list-group list-group-light">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                    <img src="../../ressources/IMG-CONTENT/enceintes.png" alt="" style="width: 45px; height: 45px"class="rounded-circle" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">@Username</p>
                                        <p class="text-muted mb-0"></p>
                                    </div>
                                    <span class="badge rounded-pill badge-success">
                                        <button type="button" class="btn btn-outline-info">Y</button>
                                        <button type="button" class="btn btn-outline-info">N</button>
                                    </span>
                                    </div>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                    <img src="../../ressources/IMG-CONTENT/enceintes.png" class="rounded-circle" alt=""style="width: 45px; height: 45px" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">@Username</p>
                                        <p class="text-muted mb-0"></p>
                                    </div>
                                    <span class="badge rounded-pill badge-success">
                                        <button type="button" class="btn btn-outline-info">Y</button>
                                        <button type="button" class="btn btn-outline-info">N</button>
                                    </span>
                                    </div>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                    <img src="../../ressources/IMG-CONTENT/enceintes.png" class="rounded-circle" alt=""style="width: 45px; height: 45px" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">@Username</p>
                                        <p class="text-muted mb-0"></p>
                                    </div>
                                    <span class="badge rounded-pill badge-success">
                                        <button type="button" class="btn btn-outline-info">Y</button>
                                        <button type="button" class="btn btn-outline-info">N</button>
                                    </span>
                                    </div>
                                </li>
                            </ul>
=======
                            <!-----------------------REQUEST PROFILE LIST GROUP----------------------->
                            <div class="modal-body">
                                <div class="overflow-scroll" style="height: 350px;">
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
>>>>>>> Stashed changes
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
            </span>
        </div>
    </div>
    
    <div class="row mt-5">
        <!-------------------------------------------------PROFILE BLOCK-------------------------------------------------------------->
        <div class="d-block p-2 block1 col-3">
            <div class="d-flex justify-content-center">
                <a href="#">
                    <img src="../../ressources/IMG-CONTENT/dosV.png" class="profile2" alt="edit">
                </a>
            </div>
            <div>
                <p class="text-center fs-6 p-1">Account Type</p>
                <button type="button" class="btn btn-outline-dark pe-5 ps-5">Edit Profile</button>
                <p class="text-center fs-3 pt-3">Followers : </p>
                <p class="text-center fs-3 pt-3">Track : </p>
            </div>
            <div>
                <p class="text-center fs-5 mt-4 pt-2 pb-2 bio">Bio</p>
                <p class="text-center fs-6 mt-2 registered">Registered since</p>
            </div>
        </div>
<<<<<<< Updated upstream

        <!-------------------------------------------------STATUS BLOCK-------------------------------------------------------------->
    
        <div class="col-6 d-block  ms-5">
            <!---------STATS---------->
            <div class="row d-block statsBlock">
                <div class="d-block d-flex justify-content-center">
                    <div class="d-inline darkBlock">
                        <img src="../../ressources/IMG-CONTENT/eye.png" alt="">
                        <span>200 Views</span>
                    </div>
                    <div class="d-inline darkBlock">
                        <img src="../../ressources/IMG-CONTENT/bubble.png" alt="">
                        <span>50 Comments</span>
                    </div>
                </div>
    
                <div class="d-block d-flex justify-content-center">
                    <div class="d-inline darkBlock">
                        <img src="../../ressources/IMG-CONTENT/like.png" alt="">
                        <span>200 Views</span>
                    </div>
                    <div class="d-inline darkBlock">
                        <img src="../../ressources/IMG-CONTENT/request.png" alt="">
                        <span>50 Comments</span>
                    </div>
                </div>
            </div>

            <!---------HISTORIQUE POST---------->
            <div class="row mt-5">
                <div class="col-6">
                    <div class="d-inline d-flex justify-content-center p-2">
                        <div class="dash-block overflow-auto">
                            <p class="subtitle darkB text-center ms-4 mt-3 pt-1">Unfinished</p>
                            <div class="">
                                <img src="../../ressources/IMG-CONzTENT/Bouge.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!---------RECENTLY POST---------->
                <div class="col-6">
                    <div class="d-inline d-flex justify-content-center p-2">
                        <div class="dash-block">
                            <p class="subtitle darkB text-center ms-4 mt-3 pt-1">Recently Post</p>
                            <div class="mt-3 ms-5 RecentlyBlock">
                                <img src="../../ressources/IMG-CONTENT/pulse.png" class="pulse mt-3 ms-3" alt="">             
=======
        <!-------------------------------------------------STATUS BLOCK-------------------------------------------------------------->
        <div class="mt-4 p-2 ps-4 col-lg-4 col-md-12  me-sm-3">
            <div class="row">
                    <div class="col-5 statsBlock overflow-auto">
                        <p class="subtitle darkB text-center ms-2 mt-3 mb-2 recentlyPost">Unfinished</p>
                        <div class="row">
                            <ul class="list-group list-group-light">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                    <img src="../../ressources/IMG-CONTENT/Mr.morale.jpeg" alt="" style="width: 45px; height: 45px" class="rounded-3" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">Father times</p>
                                    </div>
                                    </div>
                                    <a class="btn btn-link btn-rounded btn-sm" href="#" role="button">View</a>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                    <img src="../../ressources/IMG-CONTENT/Mr.morale.jpeg" class="rounded-3" alt="" style="width: 45px; height: 45px" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">K-DOT</p>
                                    </div>
                                    </div>
                                    <a class="btn btn-link btn-rounded btn-sm" href="#" role="button">View</a>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                    <img src="../../ressources/IMG-CONTENT/Mr.morale.jpeg" class="rounded-3" alt="" style="width: 45px; height: 45px" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">K-DOT</p>
                                    </div>
                                    </div>
    
                                    <a class="btn btn-link btn-rounded btn-sm" href="#" role="button">View</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                <div class="col-2"></div>
                    <!-------------------RECENTLY POST------------------->
                    <div class="col-5 statsBlock">
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
                <div class="text-center mt-3">
                    <h5 class="subtitle darkB ms-5 me-5">Favoris Track</h5>
                </div>
                <div class="container h-50 text-center" >
                    <div class="overflow-scroll" style="height: 100px;">
                        <ul class="list-group list-group-light">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                <img src="../../ressources/IMG-CONTENT/Mr.morale.jpeg" alt="" style="width: 45px; height: 45px"
                                    class="rounded-3" />
                                <div class="ms-3">
                                    <p class="fw-bold mb-1">Track</p>
                                    <p class="text-muted mb-0">@Username</p>
                                </div>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                <img src="../../ressources/IMG-CONTENT/Mr.morale.jpeg" class="rounded-3" alt=""
                                    style="width: 45px; height: 45px" />
                                <div class="ms-3">
                                    <p class="fw-bold mb-1">Track</p>
                                    <p class="text-muted mb-0">@Username</p>
                                </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> 
        <!-------------------------------------------------EDIT BLOCK-------------------------------------------------------------->
    <div class="p-2 block1 col-lg-4 col-md-12 ms-3 mt-4">
        <div class="row mt-3">
            <div class="col-6">

                <div class="d-inline-flex p-2 mb-5">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-dark darkBlock" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        <img src="../../ressources/IMG-CONTENT/note.png" width="60" alt="">
                        <p class="subtitle pt-1">Create Track</p>
                    </button>
                </div>

                <div class="d-inline-flex p-2 ">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-light darkBlock" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        <img src="../../ressources/IMG-CONTENT/vinyl.png" width="60" alt="">
                        <p class="subtitle pt-1">Create Album</p>
                    </button>
                </div>
            </div>
            <div class="col-6">
            <div class="d-inline-flex p-2 mb-5">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-dark darkBlock" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        <img src="../../ressources/IMG-CONTENT/doc.png" width="60" alt="">
                        <p class="subtitle pt-1">My Files</p>
                    </button>
                </div>


                <div class="d-inline-flex p-2">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-warning darkBlock" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        <img src="../../ressources/IMG-CONTENT/notif.png" width="55" alt="">
                        <p class="subtitle pt-1">Create Track</p>
                    </button>


                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <form>
                                            <div class="mb-3 col-md-6">
                                                <label for="title" class="form-label"><p class="subtitle">TITLE</p></label>
                                                <input type="text" class="form-control" id="title">
                                                <div class="form-text subtitle">60 Maximum characters allowed.</div>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <div class="">
                                                <select id="inputState" class="form-select">
                                                    <option selected>Choose..</option>
                                                    <option>Trap</option>
                                                    <option>Rap / Old School</option>
                                                    <option>R&B</option>
                                                    <option>Rock Pop</option>
                                                    <option>Latin Pop</option>
                                                    <option>Uk Drill</option>
                                                    <option>Jersey Concept</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <input class="form-control form-control-sm" id="formFileSm" type="file" accept=".mp3,.wav">
                                            </div>
                                                <button type="submit" class="btn btn-outline-secondary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
>>>>>>> Stashed changes
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-------------------------------------------------EDIT BLOCK-------------------------------------------------------------->
        <div class="d-block p-2 block1 col-3"></div>
    </div>
<<<<<<< Updated upstream
=======
</div>
>>>>>>> Stashed changes
</div>