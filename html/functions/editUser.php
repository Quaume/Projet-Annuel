<?php  
require "functions.php";  

//Vérification de l'utilisateur

$id = $_SESSION["id"];

if(!isConnected()){
	die("Il faut se connecter !!!");
}
    $pdo = connectDB();

    $queryPrepared = $pdo->prepare("SELECT * FROM utrackpa_users");
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
            <td>'.$user["img_profile"].'</td>
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
    