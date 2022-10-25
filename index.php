<?php

require_once 'select.php';
require_once 'selectCategorias.php';

?>

<i>Categorias</i>
<a href="criarCategoria.php"><h3>Criar categoria</h3></a>
<ul>
    <?php foreach ($categorias as $categoria) : ?>
       <li><a href="pageCategorias.php?nome=<?=$categoria['nome']?>"><?=$categoria['nome']?> </a></li>
    <?php endforeach; ?>
</ul>

<hr>
<a href="inserir.php"><h3>Criar posts</h3></a>
<h1>Posts</h1>

<div>
    <?php foreach ($posts as $post) : ?>

        <a href="post.php?post_id=<?= $post['post_id'] ?>">
            <h2><?= $post['title'] ?></h2>
        </a>
        <a href="edit.php?post_id=<?=$post['post_id']?>">Editar</a>
        <a href="delete.php?post_id=<?=$post['post_id']?>">Deletar</a>
        <hr>
    <?php endforeach; ?>

</div>
