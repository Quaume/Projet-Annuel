<?php
include 'includes/forum-layout/head.php';
require('../../functions/functions.php');
$pdo = connectDB(); // CONNECTION À LA BDD RECUPERATION DES NOM D'USER DE CATEGORY ET SUBCATEGORY

$category = $pdo->query('SELECT * FROM category ORDER BY name');
$subcat = $pdo->prepare('SELECT * FROM sub_category WHERE id_category = ? ORDER BY name');
?>
<?php include 'includes/forum-layout/nav-bar.php'; ?>
<div class="container">
    <div class="row">
        <?php include ('includes/forum-layout/forum.view.php');?>
    </div>
</div>
