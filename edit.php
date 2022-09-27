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

<h1>Editar posts</h1>
<form action="update.php" method="POST">

    <div>
        <input type="hidden" name="post_id" value="<?=$currentPost['post_id']?>" >
    </div>
    <div>
        <input type="text" name="title" placeholder="Titulo" value="<?=$currentPost['title']?>"><br>
    </div>
    <br>
    <div>
        <textarea  name="body" rows="40" cols="200"><?=$currentPost['body']?></textarea>                               
    </div>
    <br>
    <div>
        <input type="submit" name="submit" value="Atualizar">
    </div>

</form>

