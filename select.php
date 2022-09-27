<?php
    require_once 'config/connection.php';


$stmt = $conn->prepare("SELECT *, `posts`.`id` AS `post_id` FROM `posts` 
INNER JOIN `categorias`
ON `posts`.`categoriaId` = `categorias`.`id` ORDER BY `post_id` DESC");
$stmt->execute();

$posts = $stmt->fetchAll();
?>