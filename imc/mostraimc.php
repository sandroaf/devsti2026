<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo IMC - Resultado</title>

    <?php
        require_once("funcoes.php"); 
    ?>
</head>
<body>
    <header>
        <h1>Cálculo IMC - Resultado</h1>
    </header>
    <main>
        <?php
           echo "<h2>".$_POST["fnome"]."</h2>";
           echo "<p></p>Você tem ".calculoidade($_POST["fdtnascto"])->format("%y")." anos com uma altura de ".$_POST["faltura"]." e peso de ".$_POST["fpeso"].".</p>"; 
           $retornoimc = imc($_POST["fpeso"],$_POST["faltura"]);
           echo "<p>Seu IMC é ".$retornoimc["imc"]." e você tem ".$retornoimc["classificacao"]."</p>";
        ?>
        <br>
        <a href="index.php">Voltar</a>
    </main>
    <?php
       include("rodape.php");
    ?>
</body>

</html>