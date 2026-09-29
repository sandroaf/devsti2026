<form action="editor/salvar.php" method="post">
    <label for="fnomearq">Nome Arquivo: </label>
    <input name="fnomearq" type="text" required><br>
    <label for="ftextoarq">Texto: </label><br>
    <textarea name="ftextoarq"></textarea>
    <br>
    <br>
    <button type="submit">Salvar</button>
</form>
<br>
<hr>
<br>
<h1>Altear</h1>
<form action="editor/alterar.php" method="post">
<?php
    $caminho = dirname(__DIR__)."/editor/arq/";
    $dir = scandir($caminho);
    $dir = array_diff($dir,[".",".."]);
    foreach ($dir as $file) {
        echo "<input type='radio' name='fnomearq' value='$file'>$file<br>";
    }       
?>
    <button type="submit">Alterar</button>
</form>
