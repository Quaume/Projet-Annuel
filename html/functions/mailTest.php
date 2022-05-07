<?php 
require "PHP-Mailer/PHPMailerAutoload.php";

$userKey = rand(100000,999999);

$insertUsr = $pdo->prepare("INSERT INTO utrackpa_users(email,userKey,verified)VALUES(?,?,?)");
$insertUsr->execute(array($email,$userKey,0));

//RECLAMATION DE L'USER ET RECUPERATION DE EMAIL
$reclameUsr = $pdo->prepare("SELECT FROM utrackpa_users WHERE email = ?");
$reclameUsr->execute(array($email));
    if($reclameUsr->rowCount() > 0){
        $usrDetails = $reclameUsr->fetch();
        $_SESSION['id'] = $usrDetails['id'];

        //PHP MAILER FONCTION
        function smtpmailer($to, $from, $from_name, $subject, $body)
            {
                $mail = new PHPMailer();
                $mail->IsSMTP();
                $mail->SMTPAuth = true; 
         
                $mail->SMTPSecure = 'ssl'; 
                $mail->Host = 'smtp.gmail.com';
                $mail->Port = 465;  
                $mail->Username = 'utrack.off@gmail.com';
                $mail->Password = 'utrackOff777';   
           
           //   $path = 'reseller.pdf';
           //   $mail->AddAttachment($path);
           
                $mail->IsHTML(true);
                $mail->From="utrack.off@gmail.com";
                $mail->FromName=$from_name;
                $mail->Sender=$from;
                $mail->AddReplyTo($from, $from_name);
                $mail->Subject = $subject;
                $mail->Body = $body;
                $mail->AddAddress($to);
                if(!$mail->Send())
                {
                    $error ="Please try Later, Error Occured while Processing...";
                    return $error; 
                }
                else 
                {
                    $error = "Thanks You !! Your email is sent.";  
                    return $error;
                }
            }
            
        $to   = $email;
        $from = 'utrack.off@gmail.com';
        $name = 'Utrack';
        $subj = 'TEST VALIDE EMAIL';
        $msg = "MAIS TEST RECUS?";
    
        $error=smtpmailer($to,$from, $name ,$subj, $msg);
    }
