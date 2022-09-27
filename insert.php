<?php

require 'config/connection.php';


if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $body = $_POST['body'];
    $categoriaId = $_POST['categoria'];
    
    $stmt = $conn->prepare("INSERT INTO `posts` VALUES(null,?,?,?)");
    if($stmt->execute(array($title,$body,$categoriaId))){
        header("location:index.php");
    }


}
