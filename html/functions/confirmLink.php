<?php require_once 'functions.php';
$pdo = connectDB();
$errors = [];

if (isset($_GET['userKey']) && !empty($_GET['userKey'])) 
{
    $validKey = $_GET['userKey'];
    $query=$pdo->prepare('SELECT * FROM utrackpa_users WHERE userKey=:userKey AND verified=:verified');
    $query->execute(['userKey'=>$validKey, 'verified'=>0]);

    if (!empty($query->fetch())) 
    {
        $query=$pdo->prepare('UPDATE utrackpa_users SET verified=:verified WHERE userKey=:userKey');
        $query->execute(['userKey'=>$validKey, 'verified'=>1]);
        //$_SESSION['confirm'] = 1;
    }
    else
    {
        die();
    }
}
if (count($errors) != 0) {
    $_SESSION['errors'] = $errors;
}else{
    header('Location: ../LR_SESSIONS/signIn.php');
}
/*
$pdo = connectDB();
if(isset($_GET['id']) && !empty($_GET['id']) && isset($_GET['userKey']) && !empty($_GET['id'])){
    
    $getId = $_GET['id'];
    $getKey = $_GET['userKey'];
    $reclaimeUser = $pdo->prepare('SELECT * FROM utrackpa_users WHERE id = ? AND userKey = ?');
    $reclaimeUser->execute(array($getId, $getKey));
    if($reclaimeUser->rowCount() > 0){
        $userDetails = $reclaimeUser->fetch();
        //SI VERIFIED = 0 JE L'UPDATE
        if($userDetails['verified'] != 1){
            $updateConfirmation = $pdo->prepare("UPDATE utrackpa_users SET verified = ? WHERE id = ?");
            $updateConfirmation->execute(array(1, $getId));
            $_SESSION['userKey'] = $getKey;
            header("Location: ../templates/Home/Home.php");
        }else{
            $_SESSION['userKey'] = $getKey;
            header("Location: ../index.php");
        }
    }else{
        echo "<h5>"."Your KEY or ID is incorrect"."</h5>";
    }
}else{
    echo "No users found";
}
?>*/