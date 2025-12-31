<?php
    $n1 = $_POST["numero1"];
    $n2 = $_POST["numero2"];
    $resultado;
    $sinal = $_POST["sinal"];

         
    if ($sinal == "1"){
        $resultado = $n1 + $n2;
        echo("Resultado: $resultado");
    } else if ($sinal == "2"){
        $resultado = $n1 - $n2;
        echo("Resultado: $resultado");
    } else if ($sinal == "3"){
        $resultado = $n1 * $n2;
        echo("Resultado: $resultado");
    } else {
        $resultado = $n1 / $n2;
        echo("Resultado: $resultado");
    }
        
?>
<br><a href="index.html">Voltar</a>