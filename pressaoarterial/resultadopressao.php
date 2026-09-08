<?php
    $titulo = "Análise Pressão Arterial - Resultado"; 
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?></title>
    <?php
        require_once("../funcoes.php");
        if (isset($_POST["banalisar"])) {
            $nome = $_POST["fnome"]; 
            $pad = $_POST["fpad"];  
            $pas = $_POST["fpas"];
            $idade = calculoidade($_POST["fdtnascto"])->format("%y");
        }
        ?>
</head>

<body>
    <?php 
       include_once("cabecalho.php");
       if ($idade >= 18) {
          echo "<p>$nome você tem $idade anos e sua pressão de $pad e $pas está ".analisepressao($pad, $pas)."</p>"; 
       } else {
           echo "<p>$nome, é necessário ter 18 anos para realizar a análise</p>";
       } 
       include_once("rodape.php");
   ?>
</body>

</html>