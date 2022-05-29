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
                    <img src="ressources/IMG-CONTENT/icon-admin.png" alt="logo">
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
            <a class="navbar-brand" href="#">
                <img src="ressources/IMAGES-HEADER/logo-utrack.png" alt="" width="200" height="100">
            </a>
        </div>
    </nav>
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

        <div class="tableList p-4">
            <table class="table mt-4 usrList">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Username</th>
                        <th scope="col">Tracks</th>
                        <th scope="col">Email</th>
                        <th scope="col">Verified</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>5</td>
                        <td>@mdo</td>
                        <td>oui</td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>7</td>
                        <td>user@gmail.com</td>
                        <td>non</td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>9</td>
                        <td>user@gmail.com</td>
                        <td>non</td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>8</td>
                        <td>@mdo</td>
                        <td>oui</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>10</td>
                        <td>user@gmail.com</td>
                        <td>non</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                        <td>oui</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="scriptAdmin.js"></script>
</body>

</html>