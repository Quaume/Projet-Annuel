<?php
	session_start();
	require "../functions/functions.php";
?>

<?php include "formheader.php"?>

    <div class="container-fluid pt-5 mt-1">

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
                                

                        $token = createToken();
                        updateToken($results["id"], $token);
                        //Insertion dans la session du token
                        $_SESSION['email'] = $_POST['email'];
                        $_SESSION['id'] = $results["id"];
                        $_SESSION['token'] = $token;
                        header("location: ../templates/homed/home.php");

                    }else{
                        echo "<h5 class='errors mt-3'>Incorrect login informations</h5>";
                    }

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