<?php 

$pdo = connectDB();
$getAllpost = $pdo->query("SELECT id, author, id_usr, title, category, sub_category, content, dateOfRelease FROM utrackpa_forum ORDER BY id DESC");

if(isset($_GET['search']) && !empty($_GET['search'])){
    
    $usrSearch = $_GET['search'];

    $getAllpost = $pdo->query("SELECT id, author, id_usr, title, category, sub_category, content, dateOfRelease FROM utrackpa_forum WHERE title OR content OR category LIKE '%".$usrSearch."%' ORDER BY id DESC");
}else{

}
