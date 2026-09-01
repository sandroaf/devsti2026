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
            <label for="fidade">Idade:</label>
            <input type="number" name="fidade">
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
    <footer><p>Exemplo aplicação em HTML + PHP para cálculo do IMC - Índice de Massa Coroporal.</p>
    <br>
    <p>Referência: <a href="https://www.calcule.net/saude/calcular-imc-calculo-de-imc-ideal-online-aprenda-fazer-a-formula-para-calcular/" target="_blank">Calcule.net</a>.</p>
    </footer>
    
</body>
</html>