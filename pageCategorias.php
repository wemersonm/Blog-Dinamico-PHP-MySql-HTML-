<?php

require_once 'select.php';
require_once 'selectCategorias.php';

if (isset($_GET['nome'])) {
    $paramCategoria = $_GET['nome'];
    $currentPost = [];
    foreach ($posts as $itemPosts) {
        if ($itemPosts['nome'] == $paramCategoria) {
            $currentPost[] = $itemPosts;
        }
    }
}

?>
<h1>Posts da categoria: <?= $paramCategoria ?></h1>
<hr>

<?php
if (count($currentPost) > 0) :
    foreach ($currentPost as $itemPosts) : ?>

        <a href="post.php?post_id=<?= $itemPosts['post_id'] ?>">
            <h2><?= $itemPosts['title'] ?></h2> >Ver post< </a>

            <?php endforeach;
    else : ?>
            <h2>Essa categoria não possui posts ! Crie um agora !</h2>
            <a href="inserir.php">
                <h3>Criar posts</h3>
            </a <?php
            endif;
                ?>