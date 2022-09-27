<?php
    require_once 'config/connection.php';


$stmt = $conn->prepare("SELECT * FROM `categorias`");
$stmt->execute();
$categorias = $stmt->fetchAll();
?>