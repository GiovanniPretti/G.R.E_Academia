<?php
    $peso = isset($_POST["peso"])?$_POST["peso"]:"";
    $altura = isset($_POST["altura"])?$_POST["altura"]:"";
    $sexo = isset($_POST["sexo"])?$_POST["sexo"]:"";

    if ($peso != null && $altura != null){
        $imc = $peso / ($altura * $altura);
        $imc = number_format($imc, 2);
        if ($imc < 18.5){
            echo "IMC = " . $imc . "\nVocê está abaixo do peso";
        } else if ($imc < 25){
            echo "IMC = " . $imc . "\nVocê está no seu peso normal";
        } else if ($imc < 30){
            echo "IMC = " . $imc . "\nVocê está acima do peso";
        }  else if ($imc < 35){
            echo "IMC = " . $imc . "\nVocê está com obesidade Grau I";
        }  else if ($imc < 40){
            echo "IMC = " . $imc . "\nVocê está com obesidade Grau II";
        }  else if ($imc >= 40){
            echo "IMC = " . $imc . "\nVocê está com obesidade Grau III";
        }  
    }
?>