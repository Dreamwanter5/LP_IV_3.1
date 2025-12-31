<pre>
<?php

echo("Números escolhidos: <br>" .$_POST["n1"]." - ".$_POST["n2"]."<br>");
$resultado;

if ($_POST["operacao"] == 1){
    $resultado = $_POST["n1"]+$_POST["n2"];
    echo("O resultado é: ".$resultado);
    }
else if ($_POST["operacao"] == 2){
    $resultado = $_POST["n1"]-$_POST["n2"];
    echo("O resultado é:".$resultado);
}
else if ($_POST["operacao"]== 3){
    $resultado = $_POST["n1"]*$_POST["n2"];
    echo("O resultado é:".$resultado);
}
else {
    $resultado = $_POST["n1"]/$_POST["n2"];
    echo("O resultado é:".$resultado);
}

?>
</pre>