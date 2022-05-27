<?php
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

                <input type="text" name="username" class="form-control-md text-center formsbtns mt-4 px-5 py-1"
                    placeholder="Username" required="required"><br>
                <input type="email" name="email" class="form-control-md text-center mt-3 formsbtns px-5 py-1"
                    placeholder="Email" required="required"><br>
                <input type="date" name="birthday" class="form-control-md text-center mt-3 formsdate px-5 py-1"
                    required="required"><br>
                <input type="password" name="password" class="form-control-md text-center mt-3 formsbtns px-5 py-1"
                    placeholder="Password" required="required"><br>
                <input type="password" name="passwordConfirm"
                    class="form-control-md text-center mt-3 formsbtns px-5 py-1" placeholder="Confirm Password"
                    required="required"><br>

                Your Account Type

                <select name="accountType" class="form-control-md text-center mt-3 formsselect py-1">
                    <option value="Listener" class="form-control-md text-center">Listener</option>
                    <option value="Artist" class="form-control-md text-center">Artist</option>
                    <option value="Beatmaker" class="form-control-md text-center">Beatmaker</option>
                </select><br>

                <!-- Modal Captcha -->
                <a type="button" class="formsbtns py-1 px-3 my-2" data-bs-toggle="modal" data-bs-target="#modalCaptcha"
                    id="captchaVerif">Click To Complete The Captcha</a><br>

                <div class="modal fade" id="modalCaptcha" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content captcha">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Click On The Squares To Change Their
                                    Color</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <h5 id="colorCompleteInfo"></h5>
                            <h5>Close PopUp when finished</h5>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-4 captchaSquare" id="cs1"></div>
                                    <div class="col-4 captchaSquare" id="cs2"></div>
                                    <div class="col-4 captchaSquare" id="cs3"></div>
                                </div>
                                <div class="row">
                                    <div class="col-4 captchaSquare" id="cs4"></div>
                                    <div class="col-4 captchaSquare" id="cs5"></div>
                                    <div class="col-4 captchaSquare" id="cs6"></div>
                                </div>
                                <div class="row">
                                    <div class="col-4 captchaSquare" id="cs7"></div>
                                    <div class="col-4 captchaSquare" id="cs8"></div>
                                    <div class="col-4 captchaSquare" id="cs9"></div>
                                </div>

                            </div>
                            <h5 id="completed"></h5>
                        </div>
                    </div>
                </div>
                <input type="checkbox" name="cgu" required="required" class="mt-3"><a type="button"
                    class="formsbtns px-2" href='cgu.html'>CGU</a><br>
                <input type="submit" disabled="disabled" id="signUp"
                    class="form-control-md text-center mt-3 formsbtns px-4 py-1" value="Sign Up">
            </form>

            <input type="button" onclick="window.location.href='signIn.php'"
                class="form-control-md text-center mt-4 formsbtns px-3 py-1 mb-5" value="I Already Have An Account">

        </div>

        <div class="col-lg-4 col-sm-3 col-0"></div>

        <!-- Script Captcha -->
        <script src="captcha.js"></script>
    </div>
</div>
</body>

</html>