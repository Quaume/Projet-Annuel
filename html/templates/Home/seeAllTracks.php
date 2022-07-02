<?php include 'header-home.php'; ?>
<div class="container">
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
            <?php foreach (getAllTracks() as $track)

             {
                 $trackId = $track['id'];
                 $trackTitle = $track['title'];
                 $trackArtist = $track['artist'];
                 $trackCategory = $track['category'];
                 $trackDate = $track['dateOfRelease'];
                 $trackCover = $track['img_profile'];
                 $trackFile = $track['trackName'];
                ?>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="../../ressources/tracks_cover/<?=getImgTrackById($trackId)?>" alt=""
                                style="width: 45px; height: 45px" class="rounded-circle" />
                            <div class="ms-3">
                                <p class="fw-bold mb-1"><?=$trackTitle;?></p>
                                <p class="text-muted mb-0"><?=getUserUsernameById($trackArtist);?></p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1">IDK</p>
                    </td>
                    <td>
                    <p class="fw-normal mb-1"><?=$trackDate;?></p>
                    </td>
                    <td><?=$trackCategory;?></td>
                    <td>
                        <button type="button" class="btn btn-link btn-sm btn-rounded">
                            Like??
                        </button>
                    </td>
                </tr>
                <?php
            }
                ?>
            </tbody>
        </table>
</div>