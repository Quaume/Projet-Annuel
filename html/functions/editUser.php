<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "functions.php";  

//Vérification de l'utilisateur

$id = $_SESSION["id"];

if(!isConnected()){
	die("You need to log in !!!");
}
    $pdo = connectDB();

    $queryPrepared = $pdo->prepare("SELECT * FROM utrackpa_users WHERE id = $id");
    $queryPrepared->execute();
    $user = $queryPrepared->fetch();
    echo'

    <h1>Votre compte</h1>

    <table class="table">
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Email</th>
        <th>Profile Image</th>
    </tr>
         <tr>
            <td>'.$user["id"].'</td>
            <td>'.$user["username"].'</td>
            <td>'.$user["email"].'</td>
            <td>
            <img src="../ressources/img-profile/'.$user["img_profile"].' "width="80">'
            .'</td>
        </tr>
    </table>
    <h1>Vos modifications</h1>
        <form method="POST" action="editedUser.php?id='.$user["id"].'" enctype="multipart/form-data">
            
            <input type="text" class="form-control" name="username" placeholder="Votre username"><br>
            <input type="email" class="form-control" name="email" placeholder="Votre email"><br>
            <input type="text" class="form-control" name="pwd" placeholder="Votre nouveau mot de passe"><br>

            <input type="file" class="btn btn-primary" name="img-profile" accept=".png,.jpg,.jpeg"><br>
            <input type="submit" class="btn btn-primary" value="Valider les modifications">

        </form>

    ';
    if(!empty($_SESSION['errors'])){
        foreach($_SESSION['errors'] as $error){
            echo
            '
            <li>'.$error.'</li>
            ';
        };
        unset($_SESSION['errors']);
    }
    if(!empty($_SESSION['confirm'])){
        foreach ($_SESSION['confirm'] as $confirm){
            echo
            '
            <li>'.$confirm.'</li>
            ';
        }
        unset($_SESSION['confirm']);
    }
    