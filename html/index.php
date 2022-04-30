<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Utrack</title>
        <link rel="icon" type="image/png" href="RESSOURCES/IMAGES-HEADER/icon.png">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <link href="STYLES/header.css" rel="stylesheet">
        <link href="STYLES/cover.css" rel="stylesheet">
        <link href="STYLES/footer.css" rel="stylesheet">     
    </head>
    <body>
        <?php include 'TEMPLATES/header-index.php'; ?>
        <div class="masthead" style="background-image: url(RESSOURCES/IMG-CONTENT/Banner.png);">
            <div class="color-overlay d-flex justify-content-center align-items-center">
                <div class="row">
                    <div> 
                        <h1 class="d-flex justify-content-center">MAKE YOURSELF KNOWN !</h1>
                    </div>
                    <div>
                        <p class="lead d-flex justify-content-center">Share your world !</p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a type="button" href="LR_SESSIONS/signUp.php" class="btn btn-outline-secondary">Join Us</a>
                    </div>
                </div>
            </div>
        </div>
        <footer class="blockquote">
            <?php include 'TEMPLATES/footer-index.php'; ?>
        </footer>
    </body>
</html>