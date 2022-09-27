<?php
require 'delete.php';
require 'config/connection.php';

if($_POST['submit']){
    $id = $_POST['post_id'];
    $title = $_POST['title'];
    $body = $_POST['body'];

    $stmt = $conn->prepare("UPDATE `posts` SET title=?,body=? WHERE id=?");
    if($stmt->execute(array($title,$body,$id))){
        header("location:index.php");
    }


}


?>