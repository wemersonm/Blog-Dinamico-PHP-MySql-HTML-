<?php

require_once 'select.php';
require_once 'config/connection.php';

if(isset($_GET['post_id'])){
    $idPost = $_GET['post_id'];
   
    $stmt = $conn->prepare("DELETE FROM `posts` WHERE id=?");
    $stmt->execute(array($idPost));
    header("location:index.php");
}