<?php include 'header-home.php'; ?>
<div class="container">
    <?php 
            if(isset($dateOfReleaseByCategory)){
                ?>
                <table class="table align-middle mb-0">
                <thead class="">
                    <tr>
                        <th>Name</th>
                        <th>Album</th>
                        <th>Date Release</th>
                        <th>Category</th>
                        <th>Likes</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="../../ressources/tracks_cover/<?=getImgTrackById($idByCategory)?>" alt=""
                                style="width: 45px; height: 45px" class="rounded-circle" />
                            <div class="ms-3">
                                <p class="fw-bold mb-1"><?=$titleByCategory;?></p>
                                <p class="text-muted mb-0"><?=getUserUsernameById($artistByCategory);?></p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1"><?=$albumByCategory?></p>
                    </td>
                    <td>
                    <p class="fw-normal mb-1"><?=$dateOfReleaseByCategory;?></p>
                    </td>
                    <td><?=$category;?></td>
                    <td>
                        <button type="button" class="btn btn-link btn-sm btn-rounded">
                            Like??
                        </button>
                    </td>
                </tr>
                </tbody>
            </table>
                <?php
            }else{
                ?>
                <div class="d-flex justify-content-center">
                    <div class="show toast" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                            <img src="../../ressources/IMAGES-HEADER/icon.png" width="16" height="16"class="rounded me-2" alt="...">
                            <strong class="me-auto">Utrack</strong>
                            <small></small>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                            <div class="d-flex align-items-center">
                            
                                <strong><?=$errors;?></strong>
                                <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
                ?>
</div>