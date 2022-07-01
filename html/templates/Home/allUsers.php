<?php
include "header-home.php";
if(!isConnected()){
	die(header("Location: ../../index.php"));
}

$colcount = 0;

?>

<div class="container">
<div class="row">
<?php

foreach(getAllUsers() as $user){

if($user['id'] != getUserId()){

if($colcount == 1){
    echo'<div class="col-2"></div>';
    $colcount = 0;
}else{
    $colcount = 1;
}

echo'

<div class="col-md-5 text-center mt-4 mb-4 py-3 userBlock">
<a href="#" class="userLink">
<img src=../../ressources/img-profile/'.getUserImgById(getUserIdByUsername($user['username'])).' class="rounded-circle profile">
</a>
<a href="#" class="userLink mx-2">
'.$user['username'].'
</a> -
'.$user['accountType'].'
<a href="#" class="btn btn-outline-secondary mx-2">
    View Page
</a>
';
if(empty(isUserFollowed(getUserId(),$user["id"]))){
    echo'<a href="../../functions/follow.php?followed='.$user["username"].'&amp;source=allUsers" class="btn btn-outline-secondary" >Follow</a>';
}else{
    echo'<a href="../../functions/unfollow.php?followed='.$user["username"].'&amp;source=allUsers" class="btn btn-outline-secondary">Unfollow</a>';
}
echo'
</div>

';

}
}
?>
</div>
</div>

<!--FOOTER-->
<footer class="">
    <?php include "footer-home.php"?>
</footer>
</body>

</html>