<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo IMC</title>
</head>
<body>
    <header>
        <h1>Cálculo IMC</h1>
    </header>
    <main>
        <form action="mostraimc.php" method="POST">
            <p>Informe seus dados:</p>
            <label for="fnome">Nome: </label>
            <input type="text" size="40" name="fnome" placeholder="Nome completo">
            <br>
            <label for="fdtnascto">Idade:</label>
            <input type="date" name="fdtnascto">
            <br>
            <label for="faltura">Altura (m): </label>
            <input type="number" name="faltura" step="0.01" min="0">
            <br>
            <label for="fpeso">Peso (kg)</label>
            <input type="number" name="fpeso" step="0.01" min="0">
            <br>
            <button type="submit" name="bcalcular">Calcular IMC</button>&nbsp;
            <button type="reset">Limpar</button>
        </form>
    </main>
    <?php
       include("rodape.php");
    ?>
    
</body>
</html>