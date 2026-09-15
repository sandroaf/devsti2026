<?php
        $titulo = "Cálculo Fatura Energia Elétrica";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">  
    <title><?=$titulo?></title>
</head>
<body>
    <?php 
        include_once("cabecalho.php"); 
    ?>
    <main>
       <br>
       <h2>Fatura Elétrica</h2>
       <form action="analisefatura.php" method="post">
           <label for="fnome">Nome:</label>
           <input type="text" name="fnome">
           <br>
           <label for="fconsumo">Consumo (KWh):</label>
           <input type="number" name="fconsumo">
           <br>
           <label for="fbandeira">Bandeira Tarifária: </label>
           <select name="fbandeira">
                <option value="Verde" selected>Verde</option>
                <option value="Amarela">Amarela</option>
                <option value="Vermelha Patamar 1">Vermelha Patamar 1</option>
                <option value="Vermelha Patamar 2">Vermelha Patamar 2</option>  
           </select>
           <br>
           <br>
           <button type="submit" class="botao">CALCULAR<//button>
       </form>
    </main>
    <?php
        include_once("rodape.php");
    ?>
</body>
</html>