<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Arquivo</title>
</head>
<body>
    <h1>Alterar Arquivo</h1>
    <form action="salvar.php" method="post">
        <label for="fnomearq">Nome Arquivo: </label>
        <input name="fnomearq" type="text" value="<?= $_POST["fnomearq"] ?>" required><br>
        <label for="ftextoarq">Texto: </label><br>
        <textarea name="ftextoarq">
<?php
$caminho = dirname(__DIR__)."/editor/arq/";
readfile($caminho.$_POST["fnomearq"]);
?>
        </textarea>
        <br>
        <br>
        <button type="submit">Salvar</button>
    </form>
    
</body>
</html>