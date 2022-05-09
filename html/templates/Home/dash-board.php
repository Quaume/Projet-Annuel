<?php
session_start();
require "../../functions/functions.php"; 
include "header-home.php"; 
?>
<div class="container mt-5">

    <div class="row">
        <div class="d-block p-2 col-10">
            <span class="d-inline">
                <a href="#">
                    <img src="../../ressources/IMG-CONTENT/dosV.png" class="profile" alt="profile">
                </a>
            </span>
            <span class="d-inline font-weight-light ps-1 userProfile">
                <a href="#">@Username <?php //getUserUsername($_SESSION["token"]); print($_SESSION["token"]); ?></a>
            </span>
        </div>

        <div class="d-block p-2 col-2  d-flex align-items-center">
            <span class="d-block ms-3 ps-1" data-bs-toggle="popover" data-bs-trigger="hover focus">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">My Rights Requests</button>
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Confirm / Decline</h5>
                        </div>
                        <!-----------------------REQUEST PROFILE LIST GROUP----------------------->
                        <div class="modal-body">
                        <!-----------------------BEATMAKER REQUEST----------------------->
                        <h6 class="p-2 border-bottom border-dark">Beatmaker</h6>
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
                        <h6 class="p-2 border-top border-bottom border-dark">Artist</h6>
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

                            </ul>
                            <!-----------------------LISTENER REQUEST----------------------->
                        <h6 class="p-2 border-top border-bottom border-dark mt-4">Listener</h6>
                            <ul class="list-group list-group-light">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                    <img src="../../ressources/IMG-CONTENT/enceintes.png" alt="" style="width: 45px; height: 45px"class="rounded-circle" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">@Username</p>
                                        <p class="text-muted mb-0"></p>
                                    </div>
                                    <span class="badge rounded-pill badge-success">
                                        <button type="button" class="btn btn-outline-info">Y </button>
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
                                        <button type="button" class="btn btn-outline-info">Y </button>
                                        <button type="button" class="btn btn-outline-info">N</button>
                                    </span>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div class="modal-footer">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-outline-secondary"aria-label="Close">Close</button>
                        </div>
                    </div>

                </div>
            </div>
            </span>
        </div>
    </div>
    
    <div class="row mt-5 d-flex justify-content-center">

        <!-------------------------------------------------PROFILE BLOCK-------------------------------------------------------------->
        <div class="d-block p-2 block1 col-lg-4 col-md-12 mt-4 me-sm-3">
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

        <!-------------------------------------------------STATUS BLOCK-------------------------------------------------------------->
    
        <div class="col-lg-4 col-md-12 mt-4">
            <!---------STATS---------->
  
                <div class="content-center ms-sm-5">
                    <div class="row">

                        <div class="col-sm-5 p-3 darkB text-center mt-2">
                            <span class="badge rounded-pill badge-success">
                            <img src="../../ressources/IMG-CONTENT/eye.png" alt="">
                            <h6>200 Views</h6>
                            </span>
                        </div>

                        <div class="col-sm-5 p-3 darkB ms-sm-5 text-center mt-2">
                            <span class="badge rounded-pill badge-success">
                            <img src="../../ressources/IMG-CONTENT/bubble.png" alt="">
                            <h6>200 Views</h6>
                            </span>
                        </div>
                        
                    </div>

                    <div class="row mt-2">

                        <div class="col-sm-5 p-3 darkB text-center mt-2">
                            <span class="badge rounded-pill badge-success">
                            <img src="../../ressources/IMG-CONTENT/like.png" alt="">
                            <h6>200 Views</h6>
                            </span>
                        </div>

                        <div class="col-sm-5 p-3 darkB ms-sm-5 text-center mt-2">
                            <span class="badge rounded-pill badge-success">
                            <img src="../../ressources/IMG-CONTENT/request.png" alt="">
                            <h6>200 Views</h6>
                            </span>
                        </div>

                    </div>
                </div>


            <!---------HISTORIQUE POST---------->
            <div class="row mt-4 ms-3">
                <div class="col-lg-6">
                    <div class="d-inline d-flex justify-content-center p-2">
                        <div class="dash-block overflow-auto">
                            <p class="subtitle darkB text-center ms-4 mt-3 pt-1">Unfinished</p>
                            <div class="">
                                <img src="../../ressources/IMG-CONTENT/Bouge.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!---------RECENTLY POST---------->
                <div class="col-lg-6">
                    <div class="d-inline d-flex justify-content-center p-2">
                        <div class="dash-block">
                            <p class="subtitle darkB text-center ms-4 mt-3 pt-1">Recently Post</p>
                            <div class="mt-3 ms-5 RecentlyBlock">
                                <img src="../../ressources/IMG-CONTENT/pulse.png" class="pulse mt-3 ms-3" alt="">             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-------------------------------------------------EDIT BLOCK-------------------------------------------------------------->
        <div class="d-block p-2 block1 col-lg-4 col-md-12 ms-5 mt-4"></div>


    </div>
</div>