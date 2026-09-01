<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo IMC - Resultado</title>
    <?php 
        /*
        Menor que 18.5 - Abaixo do peso ;
        Entre 18.5 e 24.9 - Peso normal ;
        Entre 25.0 e 29.9 - Pré-obesidade ;
        Entre 30.0 e 34.9 - Obesidade Grau 1 ;
        Entre 35.0 e 39.9 - Obesidade Grau 2 ;
        Acima de 40 - Obesidade Grau 3
        */
        function imc($peso, $altura) {
            $retorno = array();
            $retorno["imc"] = $peso / ($altura * $altura);
            if ($retorno["imc"] < 18.5) {
                $retorno["classificacao"] = "abaixo do peso";
            } elseif ($retorno["imc"] >= 18.5 && $retorno["imc"] < 25) {
                $retorno["classificacao"] = "peso normal";
            } elseif ($retorno["imc"] >= 25 && $retorno["imc"] < 30) {
                $retorno["classificacao"] = "pré-obsidade";
            } elseif ($retorno["imc"] >= 30 && $retorno["imc"] < 35) {
                $retorno["classificacao"] = "obesidade grau 1";
            } elseif ($retorno["imc"] >= 35 && $retorno["imc"] < 40) {
                $retorno["classificacao"] = "obesidade grau 2";
            } else {
                $retorno["classificacao"] = "obesidade grau 3";
            }
            return $retorno;
        } 
    ?>
</head>
<body>
    <header>
        <h1>Cálculo IMC - Resultado</h1>
    </header>
    <main>
        <?php
           echo "<h2>".$_POST["fnome"]."</h2>";
           echo "<p></p>Você tem ".$_POST["fidade"]." anos com uma altura de ".$_POST["faltura"]." e peso de ".$_POST["fpeso"].".</p>"; 
           $retornoimc = imc($_POST["fpeso"],$_POST["faltura"]);
           echo "<p>Seu IMC é ".$retornoimc["imc"]." e você tem ".$retornoimc["classificacao"]."</p>";
        ?>
        <br>
        <a href="index.php">Voltar</a>
    </main>
    <footer>
        <p>Exemplo aplicação em HTML + PHP para cálculo do IMC - Índice de Massa Coroporal.</p>
        <br>
        <p>Referência: <a href="https://www.calcule.net/saude/calcular-imc-calculo-de-imc-ideal-online-aprenda-fazer-a-formula-para-calcular/" target="_blank">Calcule.net</a>.</p>
    </footer>
</body>

</html>