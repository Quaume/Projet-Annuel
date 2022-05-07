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
                <button type="button" class="btn btn-outline-secondary" title="See">My rights requests</button>
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
                                <img src="../../ressources/IMG-CONTENT/Bouge.png" alt="">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-------------------------------------------------EDIT BLOCK-------------------------------------------------------------->
        <div class="d-block p-2 block1 col-3"></div>
    </div>
</div>