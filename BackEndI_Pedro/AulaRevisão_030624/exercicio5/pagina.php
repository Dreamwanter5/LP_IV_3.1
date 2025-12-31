<?php
    $n1 = $_POST["numero1"];
    $n2 = $_POST["numero2"];
    $resultado;
    $sinal = $_POST["sinal"];

    echo("Sinal usado $sinal<br>");

    if ($sinal == "+"){
        $resultado = $n1 + $n2;
        echo("Resultado: $resultado");
    } else if ($sinal == "-"){
        $resultado = $n1 - $n2;
        echo("Resultado: $resultado");
    } else if ($sinal == "*"){
        $resultado = $n1 * $n2;
        echo("Resultado: $resultado");
    } else {
        $resultado = $n1 / $n2;
        echo("Resultado: $resultado");
    }
    
?>
<br><a href="index.html">Voltar</a>