<?php
$pdo = connectDB();
$getAllPosts = $pdo->prepare("SELECT id, author, title, category, sub_category, content FROM utrackpa_forum WHERE id_usr = ? ORDER BY id DESC");
$getAllPosts->execute(array($_SESSION['id']));