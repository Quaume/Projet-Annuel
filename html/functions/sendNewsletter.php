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
        $subject = $_POST['subject'];

        try {
            //Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp-mail.outlook.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'utrack@outlook.fr';
            $mail->Password = 'Pa20_22//Ma7jA37CO&&!';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            //Recipients
            $mail->setFrom('utrack@outlook.fr', 'Utrack');
            $mail->addAddress($to);

            //Content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $mailbody;

            $mail->send();
        } catch (Exception $e) {
            $errors[] = 'Failed to send email, please try again.';
            header("Location: ../admin_page.php?display=newsletter");
            $_SESSION['errors'] = $errors;
        }
    }

    /*============================================================*/

    foreach (getSubscribedToNewsletter() as $emailid){
    sendNewsletter(getUserEmailById($emailid[0]), $errors);
    }

    if (count($errors) != 0) {

        unset($_POST['mailbody']);
        unset($_POST['subject']);

        $_SESSION['errors'] = $errors;
        header("Location: ../admin_page.php?display=newsletter");

    } else {
        unset($_POST['mailbody']);
        unset($_POST['subject']);

        $_SESSION['confirm'] = "Newsletter has been sent successfully !";
        header("Location: ../admin_page.php?display=newsletter");
    }

?>