<?php
   require_once 'selectCategorias.php';
?>

<h1>Criar posts</h1>
<form action="insert.php" method="POST">

    <div>
        <input type="text" name="title" placeholder="Titulo"><br>
    </div>
    <br>
    <div>
        <textarea  name="body" rows="40" cols="200" placeholder="Insira o texto"></textarea>                               
    </div>
    <br>
    <select name="categoria" >
        <option>Selecione a categoria</option>
        <?php  foreach($categorias as $categoria): ?>
            <option value="<?=$categoria['id']?>"><?=$categoria['nome']?></option>
        <?php  endforeach; ?>
    </select>
    <div>
        <input type="submit" name="submit" value="Criar">
    </div>

</form>
