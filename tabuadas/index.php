<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuadas</title>
</head>
<body>
    <h1>Exemplos Tabuadas</h1>
    <ul>
        <li><a href="simples.php">Tabuada Simples de um número</a>
        </li>
        <li><a href="tabuadacompleta.php">Listagem tabuadas completas 0 até 10</a>
        </li>
        <li>
            Tabuada Número <br>
            <form action="tabuadanumero.php" method="get">
                <label for="fnumero">Número: </label>
                <input type="number" name="fnumero" value="0">
                <button type="submit">Enviar</button>
            </form>
        </li>
    </ul>
</body>
</html>