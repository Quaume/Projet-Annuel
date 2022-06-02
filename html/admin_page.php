<?php
require 'functions/functions.php'
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
                        <a href="#">
                            <i class='bx bx-list-ul icon'></i>
                            <span class="text nav-text">Table List</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bxs-bell-ring icon'></i>
                            <span class="text nav-text">Notification</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
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
    <!--
        <div class="text blockUsr">
            <div class="d-flex justify-content-evenly mt-1">
                <div class="d-flex align-items-center mt-3">
                    <div class="pe-5">
                        <a href="#">
                            <button class="showUsr btn btn-outline-secondary">Show All users</button>
                        </a>
                    </div>
                    <div class="ps-5">
                        <a href="#">
                            <button class="showUsr btn btn-outline-secondary">Show Banned users</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    -->
        <div class="tableList p-4">
            <div class="overflow-auto" style="height:500px">
            <h4>Users List</h4>
            <table class="table mt-4 usrList">
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
                <tbody>
                <?php
                foreach (getAllUsers() as $user){
                    echo '<tr>

                    <td><img src="ressources/img-profile/'.$user["img_profile"].'" height="30"></td>
                    <td>'.$user["id"].'</td>
                    <td>'.$user["username"].'</td>
                    <td>'.$user["birthday"].'</td>
                    <td>'.$user["email"].'</td>
                    <td>'.$user["accountType"].'</td>
                    <td>'.$user["dateInserted"].'</td>
                    <td>'.$user["dateUpdated"].'</td>
                    <td>'.$user["verified"].'</td>
                    
                    <td>
                    <div class="btn-group" role="group">
                        <a href="deleteUser.php?id='.$user["id"].'" >
                            <button type="button" class="btn"><img src="ressources/IMG-CONTENT/cross.png" width="20" height="20" alt="Delete"></button>
                        </a>
                        <a href="editUser.php?id='.$user["id"].'" >
                            <button type="button" class="btn"><img src="ressources/IMG-CONTENT/pen.png" width="20" height="20" alt="edit"></button>
                        </a>
                    </div>
                    </td>

                </tr>';

                }
                ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>

    <script src="scriptAdmin.js"></script>
</body>

</html>