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

function analisepressao($pad,$pas) {
    /*
    Pressão Arterial Diastólica (PAD)	Pressão Arterial Sistólica (PAS)	Classificação
    Menor que 85 mmHg	Menor que 130 mmHg	Normal
    Entre 85 e 89 mmHg	Entre 130 e 139 mmHg	Normal limítrofe
    Entre 90 e 99 mmHg	Entre 140 e 159 mmHg	Hipertensão leve (estágio 1)
    Entre 100 e 109 mmHg	Entre 160 e 179 mmHg	Hipertensão moderada (estágio 2)
    Maior ou igual a 110 mmHg	Maior ou igual a 180 mmHg	Hipertensão grave (estágio 3)
    Menor que 90 mmHg	Maior ou igual a 140 mmHg	Hipertensão sistólica isolada
    */
    if ($pad < 85 && $pas <130) {
        $analise = "normal";
    } elseif (($pad >= 85 && $pad < 90) && ($pas >= 130 && $pas < 140)) {
        $analise = "normal limítrofe";
    } elseif (($pad >= 90 && $pad < 100) && ($pas >= 140 && $pas < 160)) {
        $analise = "hipertensão leve (estágio 1)";
    } elseif (($pad >= 100 && $pad < 110) && ($pas >= 160 && $pas < 180)) {
        $analise = "hipertensão moderada (estágio 2)";
    } elseif ($pad >= 100 && $pas >= 180) {
        $analise = "hipertensão grave (estágio 3)";
    } elseif ($pad < 90 && $pas >= 140) {
        $analise = "hipertensao sistólica isolada";
    } else {
        $analise = "hipertensao fora dos padrões analisados";
    }
    return $analise;
}