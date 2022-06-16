<?php

require 'functions.php';

if(!isAdmin()){

    if(!isConnected()){
        die(header("Location: ../index.php"));
    }else{
        die(header("Location: ../templates/Home/Home.php"));
    }

}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';



function sendNewsletter($to, &$errors)
    {
        $mail = new PHPMailer(true);
        $mailbody = $_POST['mailbody'];

        try {
            //Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'utrack.off@gmail.com';
            $mail->Password = 'utrackOff777';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            //Recipients
            $mail->setFrom('utrack.off@gmail.com', 'Utrack');
            $mail->addAddress($to);

            //Content
            $mail->isHTML(true);
            $mail->Subject = 'Newsletter !';
            $mail->Body = $mailbody;

            $mail->send();
        } catch (Exception $e) {
            $errors[] = 'Failed to send email, please try again.';
        }
    }

    /*============================================================*/

    foreach (getSubscribedToNewsletter() as $emailid){
    sendNewsletter(getUserEmailById($emailid[0]), $errors);
    }

    if (count($errors) != 0) {
        $_SESSION['errors'] = $errors;
    } else {
        //$_SESSION['confirm'] = 1;
        header("Location: testback.php");
    }

?>