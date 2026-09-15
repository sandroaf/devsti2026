<?php
    $titulo = "Análise Fatura Energia Elétrica";
    define("ICMS",0.25);

    function tarifa_base_energia($kwh) {
        $custo_energia = 0.75; //valor padrão acima de 300Kwh
        if ($kwh < 100) {
            $custo_energia = 0.40;
        } elseif (($kwh >= 100) && ($kwh < 300)) {
            $custo_energia = 0.55;
        }
        return $kwh * $custo_energia;
    }
    
    function acrescimo_bandeira($kwh, $bandeira) {
        switch ($bandeira) {            
            case "Amarela": {
                $acrescimo = 0.02*$kwh;
                break;
            }
            case "Vermelha Patamar 1": {
                $acrescimo = 0.04*$kwh;
                break;
            } 
            case "Vermelha Patamar 2": {
                $acrescimo = 0.06*$kwh;
                break;
            }
            default: {
                $acrescimo=0;
            } 
        }
        return $acrescimo;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">  
    <title><?=$titulo?> </title>
</head>
<body>
    <?php 
        include_once("cabecalho.php"); 
    ?>
    <main>
       <br>
       <h2>Resultado da Análise da Fatura Elétrica</h2>
       <?php
            $kwh = $_POST["fconsumo"];
            $bandeira = $_POST["fbandeira"];
            $nome = $_POST["fnome"];
            echo "Cliente: $nome<br>";
            echo "Consumo: $kwh Kwh - Bandeira: $bandeira <br>";
            echo "Valor Base Energia: R$ ".(tarifa_base_energia($kwh) + acrescimo_bandeira($kwh,$bandeira))."<br>";
            echo "Valor Total Fatura: R$ ".((tarifa_base_energia($kwh) + acrescimo_bandeira($kwh,$bandeira))*(1+ICMS))."<br>";
            if ($kwh > 300) {
                echo "<p style='color:red;'><strong>ATENÇÃO $nome</strong>: Seu consumo está elevado! <br> Considere adotar hábitos de economia.</p>";
            }
       ?>   
       <br>
       <a class="botao" href="index.php">VOLTAR</a>
    </main>
    <?php
        include_once("rodape.php");
    ?>
</body>
</html>