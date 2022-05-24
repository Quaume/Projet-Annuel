<?php
require('../../../../functions/functions.php');
$pdo = ConnectDB();

// TRAITEMENT DE MON FORMULAIRE
if(isset($_SESSION['id'])) {
    if(isset($_POST['t_submit'])) {
        if(isset($_POST['t_title'],$_POST['t_content'])) {
            //HTML SPECIAL CHAR ME PERMET DE REPLACER TT LES CARACTÈRE SPÉCIAUX PAR LEUR ÉQUIVALENT
            $title = htmlspecialchars($_POST['t_title']);
            $content = htmlspecialchars($_POST['t_content']);

            if(!empty($title) AND !empty($content)) {
                if(strlen($title) <= 50) {
                    if(isset($_POST['t_mail'])) {
                        $notif_mail = 1;
                    } else {
                        $notif_mail = 0;
                    }
                    $insert = $pdo->prepare("INSERT INTO topics (id_creator, title, content, notif, date_created) VALUES(:id_creator,:title,:content,:notif,NOW());");
                    $insert->execute(array($_SESSION['id'],$title,$content,$notif_mail));
                } else {
                    $terror = "Your subject cannot exceed 70 characters";
                }
            } else {
                $terror = "Please complete all fields";
            }
        }
    }
} else {
    $terror = "Please login to post a new topic";
}

require('../../includes/forum-layout/new_subject.view.php'); /* Appel du fichier "vue" de notre page */
?>