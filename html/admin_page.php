<?php
require 'functions/functions.php';

if(!isConnected()){
    header("Location: index.php");
}else if(!isAdmin()){
    header("Location: templates/Home/Home.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Utrack</title>
    <link rel="icon" type="image/png" href="ressources/IMAGES-HEADER/icon.png">

    <link rel="stylesheet" href="styles/admins.css">
    <link rel="stylesheet" href="css/bootstrap.css">

    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <link rel="icon" type="image/png" href="ressources/IMAGES-HEADER/icon.png">
</head>

<body>

    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="ressources/IMG-CONTENT/enceintes.png" height="30" alt="logo">
                </span>

                <div class="text logo-text">
                    <span class="name">Utrack</span>
                    <span class="profession">@Admin</span>
                </div>
            </div>
            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class=' ms-2 bx bx-search-alt icon-search'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="admin_page.php?display=users">
                            <i class='bx bx-list-ul icon'></i>
                            <span class="text nav-text">Users List</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bxs-bell-ring icon'></i>
                            <span class="text nav-text">Notification</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="admin_page.php?display=newsletter">
                            <i class='bx bxs-news icon'></i>
                            <span class="text nav-text">Newsletters</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bxs-bar-chart-alt-2 icon'></i>
                            <span class="text nav-text">Stats_users</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bxs-pie-chart-alt icon'></i>
                            <span class="text nav-text">Analytics</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bxs-wallet icon'></i>
                            <span class="text nav-text">Suscribers</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>

            </div>
        </div>
    </nav>

    <div class="home">
    <nav class="navbar">
        <div class="container d-flex justify-content-start ms-5">
            <a class="navbar-brand" href="templates/Home/dash-board.php">
                <img src="ressources/IMAGES-HEADER/logo-utrack.png" alt="" width="200" height="100">
            </a>
        </div>
    </nav>

    <?php 
    $display = $_GET['display'];


    switch ($display){
        case 'users':
        echo'
        <div class="tableList ms-4 p-4">
            <div class="overflow-auto" style="height:500px">

            ';if(!empty($_SESSION['errors'])){
                echo "<div class='errors mt-3'>
                <ul>
                ";
                foreach($_SESSION['errors'] as $error){
                    echo "<li>".
                    $_SESSION['errors']."
                    </li>";
                }
                echo"</ul>
                </div>
                ";
                unset($_SESSION['errors']);
            }

            if(!empty($_SESSION['confirm'])){
                echo "<div class='errors text-center mt-3'>".
                $_SESSION['confirm']."
                </div>";
                unset($_SESSION['confirm']);
            }
            echo'

            <h4>Users List</h4>
            <table class="table table-borderless mt-4 usrList">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">Profile picture</th>
                        <th scope="col" class="text-center">Id</th>
                        <th scope="col" class="text-center">Username</th>
                        <th scope="col" class="text-center">Birthday</th>
                        <th scope="col" class="text-center">Email</th>
                        <th scope="col" class="text-center">Acc_Type</th>
                        <th scope="col" class="text-center">DateInserted</th>
                        <th scope="col" class="text-center">DateUpdated</th>
                        <th scope="col" class="text-center">Verified</th>
                        <th scope="col" class="text-center">Edit</th>
                    </tr>
                </thead>
                <tbody>';

                foreach (getAllUsers() as $user){

                    $id = getUserIdByUsername($user["username"]);

                    echo '<tr>
                    <td><img src="ressources/img-profile/'.$user["img_profile"].'" height="30"></td>
                    <td>'.$id.'</td>
                    <td>'.getUserUsernameById($id).'</td>
                    <td>'.getUserBirthdayById($id).'</td>
                    <td>'.getUserEmailById($id).'</td>
                    <td>'.getUserAccountTypeById($id).'</td>
                    <td>'.getUserDateInsertedById($id).'</td>
                    <td>'.getUserDateUpdatedById($id).'</td>
                    <td>'.getUserVerifiedById($id).'</td>
                    
                    <td>
                    <div class="btn-group" role="group">
                        <a href="deleteUser.php?id='.$id.'" >
                            <button type="button" class="btn"><img src="ressources/IMG-CONTENT/cross.png" width="20" height="20" alt="Delete"></button>
                        </a>
                        <a href="editUser.php?id='.$id.'" >
                            <button type="button" class="btn"><img src="ressources/IMG-CONTENT/pen.png" width="20" height="20" alt="edit"></button>
                        </a>
                    </div>
                    </td>

                </tr>';

                }
                echo'
                </tbody>
            </table>
            </div>
            </div>
        </div>
        ';
        break;

        case 'newsletter':

            echo'
            <div class="container newsletter">
                <div class="row">
                    <div class="col-11 text-center">

                    ';if(!empty($_SESSION['errors'])){
                        echo "<div class='errors mt-3'>
                        <ul>
                        ";
                        foreach($_SESSION['errors'] as $error){
                            echo "<li>".
                            $_SESSION['errors']."
                            </li>";
                        }
                        echo"</ul>
                        </div>
                        ";
                        unset($_SESSION['errors']);
                    }
        
                    if(!empty($_SESSION['confirm'])){
                        echo "<div class='errors text-center mt-3'>".
                        $_SESSION['confirm']."
                        </div>";
                        unset($_SESSION['confirm']);
                    }
                    echo'
                        <h2 class="mt-4">Newsletter</h2><br>

                <form action="functions/sendNewsletter.php" method="post">
                    <input type="text" name="subject" class="newsletterinputs" placeholder="Newsletter Subject"><br>
                    <textarea name="mailbody" class="newsletterinputs newslettercontent mt-5" placeholder="Newsletter Content"></textarea><br>
                    <input type="submit" class="newsletterinputs" value="Send the newsletter">
                    </form>

                    </div>
                </div>
            </div>
            ';
            break;
        
}
?>
    <script src="scriptAdmin.js"></script>
</body>

</html>