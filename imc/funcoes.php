<?php
function calculoidade($datanascimento)
{
    $hoje = new DateTime();
    $datanascimento = new DateTime($datanascimento);
    $idade = $datanascimento->diff($hoje);
    return $idade;
}


function imc($peso, $altura)
{
    /*
        Função que calcula o IMC, através do recebimento por parametros do peso e altura. 
        Retorna um vetor (array) com IMC e Classificacao do IMC. Conforme:
        Menor que 18.5 - Abaixo do peso ;
        Entre 18.5 e 24.9 - Peso normal ;
        Entre 25.0 e 29.9 - Pré-obesidade ;
        Entre 30.0 e 34.9 - Obesidade Grau 1 ;
        Entre 35.0 e 39.9 - Obesidade Grau 2 ;
        Acima de 40 - Obesidade Grau 3
        */
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
