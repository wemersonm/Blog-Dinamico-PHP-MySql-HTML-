

<?php
    require_once 'select.php';
    
    if(isset($_GET['post_id'])){
        $postId = $_GET['post_id'];
        $currentPost;

        foreach($posts as $postItem){
            if($postItem['post_id'] == $postId){
                $currentPost = $postItem;
            }
        }
    }
?>

<div>
    <i>Categoria: <?=$currentPost['nome']?></i>    
    <h2><?=$currentPost['title']?></h2>
    <p><?=$currentPost['body']?></p>
</div>
