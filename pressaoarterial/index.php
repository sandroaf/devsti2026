<?php
   $titulo = "Análise Pressão Arterial - Entrada de Dados"
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?></title>
</head>
<body>
   <?php 
       include_once("cabecalho.php");
   ?>
   <form action="resultadopressao.php" method="post">
        <p>Informe seus dados:</p>
        <label for="fnome">Nome: </label>
        <input type="text" size="40" name="fnome" placeholder="Nome completo">
        <br>
        <label for="fdtnascto">Data Nascimento:</label>
        <input type="date" name="fdtnascto">
        <br>
        <label for="fpad">PAD (pressão arterial diastólica - menor)</label>
        <input type="number" name="fpad" min="0">
        <br>
        <label for="fpas">PAS (pressão arterial sistólica - maior)</label>
        <input type="number" name="fpas"  min="0">
        <br>
        <button type="submit" name="banalisar" value="analisar">Analisar</button>&nbsp;
        <button type="reset">Limpar</button>       
   </form>
   <?php 
       include_once("rodape.php");
   ?>

</body>
</html>