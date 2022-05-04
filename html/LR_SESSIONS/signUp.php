<?php
	session_start();
	require "../functions/functions.php";
?>

<?php include "formheader.php"?>

<div class="container-fluid mt-1">
 
 <div class="row header text-center form-group">
     <div class="col-lg-4 col-sm-3 col-0 "></div>
     <div class="col-lg-4 col-sm-6 col-12 commoncontainer">

         <?php
				if(!empty($_SESSION['errors'])){
					echo "<div class='errors mt-3'>";
                    foreach ($_SESSION['errors'] as $error){
                        echo "- $error<br>";
                    }
                    echo "</div>";
					unset($_SESSION['errors']);
				}
			?>

         <h2 class="mt-3">Sign Up</h2>

         <form action="../functions/newUser.php" method="POST" class="mt-3"> 
         <input type="text" name="username" class="form-control-md text-center formsbtns mt-4 px-5 py-1" placeholder="Username" required="required"><br>
         <input type="emil" name="email" class="form-control-md text-center mt-3 formsbtns px-5 py-1" placeholder="Email" required="required"><br>
         <input type="date" name="birthday" class="form-control-md text-center mt-3 formsdate px-5 py-1" required="required"><br> 
         <input type="password" name="password" class="form-control-md text-center mt-3 formsbtns px-5 py-1" placeholder="Password" required="required"><br> 
         <input type="password" name="passwordConfirm" class="form-control-md text-center mt-3 formsbtns px-5 py-1" placeholder="Confirm Password" required="required"><br>
         
         Your Account Type
         <select name="accountType" class="form-control-md text-center mt-3 formsselect py-1">
             <option value="Listener" class="form-control-md text-center">Listener</option>
             <option value="Artist" class="form-control-md text-center">Artist</option>
             <option value="Beatmaker" class="form-control-md text-center">Beatmaker</option>
        </select><br>
         <input type="text" name="captcha" class="form-control-md text-center mt-3 formsbtns px-5 py-1" placeholder="Captcha"><br>
         <input type="checkbox" name="cgu"  required="required" class="mt-3">CGU<br> 
         <input type="submit" class="form-control-md text-center mt-3 formsbtns px-4 py-1" value="Sign Up"> 
         </form>

         <input type="button" onclick="window.location.href='signIn.php'" class="form-control-md text-center mt-4 formsbtns px-3 py-1 mb-5" value="I Already Have An Account"> 

     </div>

     <div class="col-lg-4 col-sm-3 col-0"></div>


</body>
</html>