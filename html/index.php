<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Utrack</title>
    <link rel="icon" type="image/png" href="ressources/IMAGES-HEADER/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php" alt="Home">
                <img src="./ressources/IMAGES-HEADER/logo-utrack.png" alt="" width="150" height="70">
            </a>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active" href="./LR_SESSIONS/signUp.php">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">|</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./LR_SESSIONS/signIn.php">Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./LR_SESSIONS/signIn.php"><img src="./ressources/IMAGES-HEADER/bonhomme.png" width="18" height="21"></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="content d-flex align-items-center">
        <video autoplay loop muted plays-inline class="back-video" width="1437" height="">
            <source src="ressources/KDOT.mp4" class="" type="video/mp4">
        </video>
        <div class="d-flex flex-column mb-3">
            <div class="p-2 text-center">
                <h1> MAKE YOURSELF KNOWN !</h1>
            </div>
            <div class="p-2 text-center">
                <h5>Share your world !</h5>
            </div>
            <div class="p-2 text-center">
                <a href="./LR_SESSIONS/signUp.php">
                    <button type="button" class="btn btn-outline-secondary">Join Us !</button>
                </a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>