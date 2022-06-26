<?php

require 'functions.php';

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utrack</title>
    <link rel="icon" type="image/png" href="../ressources/IMAGES-HEADER/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<?php
if(isAdmin()) {

if(!empty($_SESSION['errors'])){
    echo "<div class='mt-3'>";
    foreach ($_SESSION['errors'] as $error){
        echo "- $error<br>";
    }
    echo "</div>";
    unset($_SESSION['errors']);
}

echo("Récupération des données Utilisateur =>");
echo "<br> Username : ";
printf(getUserUsernameById(getUserId()));
echo "<br> Date de naissance : ";
printf(getUserBirthdayById(getUserId()));
echo "<br> Id : ";
printf(getUserId());
echo "<br> AccountType : ";
printf(getUserAccountTypeById(getUserId()));
echo "<br> Email : ";
printf(getUserEmailById(getUserId()));
echo "<br> Date inserted : ";
printf(getUserDateInsertedById(getUserId()));
echo "<br> Date updated : ";
printf(getUserDateUpdatedById(getUserId()));
echo "<br> Verified : ";
printf(getUserVerifiedById(getUserId()));
echo "<br> Image Profile : ";
printf("<img src=../ressources/img-profile/".getUserImgById(getUserId())." width=30>");

echo "<br><br><br><br><br>";

?>
<h4>Récupération de tous les Utilisateurs et peut follow/unfollow =></h4>
    <table class="table">
    <thead>
        <tr>
            <th>Image Profile</th>
            <th>Id</th>
            <th>Username</th>
            <th>Birthday</th>
            <th>Email</th>
            <th>AccountType</th>
            <th>Date Inserted</th>
            <th>Date Updated</th>
            <th>Verified</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        
        <?php
        foreach (getAllUsers() as $user){
            echo '<tr>

                    <td><img src="../ressources/img-profile/'.$user["img_profile"].'" width="30"</td>
                    <td>'.$user["id"].'</td>
                    <td>'.$user["username"].'</td>
                    <td>'.$user["birthday"].'</td>
                    <td>'.$user["email"].'</td>
                    <td>'.$user["accountType"].'</td>
                    <td>'.$user["dateInserted"].'</td>
                    <td>'.$user["dateUpdated"].'</td>
                    <td>'.$user["verified"].'</td>
                    
                    <td>
                    <div class="btn-group">
                        <a href="deleteUser.php?id='.$user["id"].'" class="btn btn-danger">Supprimer</a>
                        <a href="editUser.php?id='.$user["id"].'" class="btn btn-warning" >Modifier</a>
        ';
        if($user["username"] != getUserUsernameById(getUserId())){

        if(empty(isUserFollowed(getUserId(),$user["id"]))){
            echo'<a href="follow.php?followed='.$user["username"].'" class="btn btn-info" >Follow</a>';
        }else{
            echo'<a href="unfollow.php?followed='.$user["username"].'" class="btn btn-info">Unfollow</a>';
        }
        }
        '            
                    </div>
                </td>
            </tr>';

        }

        ?>
    </tbody>
</table>

<h4>Récupération des Followers =></h4>
<table class="table">
    <thead>
        <tr>
            <th>follower</th>
            <th>followed</th>
        </tr>
    </thead>
    <tbody>
        
        <?php
        foreach (getFollows() as $follow){
            echo '<tr>
                    <td>'.getUserUsernameById($follow['follower']).'</td>
                    <td>'.getUserUsernameById($follow['followed']).'</td>
                </tr>';

        }

        ?>
    </tbody>
</table>

<h4>Récupération des Follows de l'utilisateur connecté =></h4>
<table class="table">
    <thead>
        <tr>
            <th>You Follow Them</th>
        </tr>
    </thead>
    <tbody>
        
        <?php
        foreach (getUserFollowed(getUserId()) as $follow){
            echo '<tr>
                <td>'.getUserUsernameById($follow['followed']).'</td>
                </tr>';
        }
        ?>
    </tbody>
</table>

<h4>Récupération des Followers de l'utilisateur connecté =></h4>
<table class="table">
    <thead>
        <tr>
            <th>They Follow You</th>
        </tr>
    </thead>
    <tbody>
        
        <?php
        foreach (getUserFollowers(getUserId()) as $follow){
            echo '<tr>
                <td>'.getUserUsernameById($follow['follower']).'</td>
                </tr>';
        }
        ?>
    </tbody>
</table>



<h4>Newsletter</h4>


<h4>Récupération des Followers =></h4>
<table class="table">
    <thead>
        <tr>
            <th>Emails</th>
            <th>
                <?php
                if(empty(isSubscribedToNewsletter())){
                echo'<a href="addToNewsLetter.php" class="btn btn-success">Subscribe to newsletter</a>';
                }else{
                echo'<a href="removeFromNewsLetter.php" class="btn btn-success">Unsubscribe from newsletter</a>';   
                }
                ?>
            </th>
        </tr>
    </thead>
    <tbody>
        
        <?php
        foreach (getSubscribedToNewsletter() as $subscribed){
            echo '<tr>
                    <td>'.getUserEmailById($subscribed['emailid']).'</td>
                </tr>';

        }

        ?>
    </tbody>
</table>

<form method="post" action="sendNewsletter.php" class="form-group">
    <input type="text" name="mailbody" class="form-control" placeholder="Write the Newsletter ...">
    <input type="submit" value="Send the newsletter">
</form>

<?php
}else{
    if(isConnected()){
        header("Location: ../templates/Home/Home.php");
    }else{
        header("Location: ../index.php");
    }
}
?>





