<?php

require 'config/connection.php';


if(isset($_POST['submit'])){
    $nome = $_POST['nome'];
  
    
    $stmt = $conn->prepare("INSERT INTO `categorias` VALUES(null,?)");
    if($stmt->execute(array($nome)) ){
        header("location:index.php");
    }


}
