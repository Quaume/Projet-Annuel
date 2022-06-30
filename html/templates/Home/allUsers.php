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

if($colcount == 1){
    echo'<div class="col-2"></div>';
    $colcount = 0;
}else{
    $colcount = 1;
}

echo'

<div class="col-md-5 text-center mt-4 mb-4 py-3 userBlock">
<a href="#" class="userLink">
<img src=../../ressources/img-profile/'.getUserImgById(getUserIdByUsername($user['username'])).' width=40>
</a>
<a href="#" class="userLink mx-2">
'.$user['username'].'
</a> -
<a href="#" class="userLink mx-2">
'.$user['accountType'].'
</a>
</div>

';

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