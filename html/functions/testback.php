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

require 'functions.php';

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
printf(getUserUsername());
echo "<br> Date de naissance : ";
printf(getUserBirthday());
echo "<br> Id : ";
printf(getUserId());
echo "<br> AccountType : ";
printf(getUserAccountType());
echo "<br> Email : ";
printf(getUserEmail());
echo "<br> Date inserted : ";
printf(getUserDateInserted());
echo "<br> Date updated : ";
printf(getUserDateUpdated());
echo "<br> Verified : ";
printf(getUserVerified());
echo "<br> Image Profile : ";
printf(getUserImg());

echo "<br><br><br><br><br>";

echo("Récupération de tous les Utilisateurs =>");
?>
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

                    <td>'.$user["img_profile"].'</td>
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
                    </div>
                    </td>

                </tr>';

        }

        ?>
    </tbody>
</table>
