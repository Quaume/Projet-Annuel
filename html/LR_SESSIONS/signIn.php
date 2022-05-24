<<<<<<< HEAD
<?php
	require "../functions/functions.php";
?>
=======
<?php	require "../functions/functions.php"; ?>
>>>>>>> d36f9c4d1dcc918a8e5b2b6b06a93d40c733ad30

<?php include "formheader.php"; ?>
    <div class="container-fluid mb-4 pt-2">

            <div class="row header">
                <div class="col-lg-4 col-sm-3 col-0 "></div>
                <div class="col-lg-4 col-sm-6 col-12 commoncontainer text-center">
            <div>
            <?php
                if( !empty($_POST['email']) &&  !empty($_POST['pwd']) && count($_POST)==2 ){

                    //Récupérer en bdd le mot de passe hashé pour l'email provenant du formulaire


                        $pdo = connectDB();
                        $queryPrepared = $pdo->prepare("SELECT * FROM utrackpa_users WHERE email=:email");
                        $queryPrepared->execute(["email"=>$_POST['email']]);
                        $results = $queryPrepared->fetch();

                    if(!empty($results) && password_verify($_POST['pwd'], $results['pwd'])){
                        $queryPrepared = $pdo->prepare("SELECT * FROM utrackpa_users WHERE verified=:verified");
                        $queryPrepared->execute(["verified"=>$_SESSION['verified']]);
                        $verified = $queryPrepared->fetch();

                        $token = createToken();
                        updateToken($results["id"], $token);
                        //Insertion dans la session du token
                        $_SESSION['email'] = $_POST['email'];
                        $_SESSION['id'] = $results["id"];
                        $_SESSION['token'] = $token;
                        header("location: ../templates/Home/Home.php");
                    }else{
                        echo "<h5 class='errors mt-3'>Incorrect login informations</h5>";
                    }

                }

				if(!empty($_SESSION['confirm'])){
					echo "<div class='confirm mt-3'>";
                    foreach ($_SESSION['confirm'] as $confirm){
                        echo "$confirm<br>";
                    }
                    echo "</div>";
					unset($_SESSION['confirm']);
				}

            ?>
                    
            <h2 class="mt-4 text-center">Sign In</h2>
                <form method="POST" action="" class="mt-3 form-group"> 
                    <input type="email" name="email" class="form-control-md text-center formsbtns mt-4 px-5 py-1" placeholder="Email" required="required"><br>
                        <input type="password" name="pwd" class="form-control-md text-center mt-4 formsbtns px-5 py-1" placeholder="Password" required="required"><br> 
                        <input type="submit" class="form-control-md text-center mt-5 formsbtns px-4 py-1" value="Sign In"> 
                </form>
        </div>

        <input type="button" onclick="window.location.href='#'" class="form-control-md text-center mt-5 formsbtns px-5 py-1" value="Forget Password ?"><br> 
        <input type="button" onclick="window.location.href='signUp.php'" class="form-control-md text-center mt-2 formsbtns px-3 py-1 mb-5" value="I Don't Have An Account">

        </div>
            <div class="col-lg-4 col-sm-3 col-0"></div>
        </div>
    </div> 
</body> 
</html>