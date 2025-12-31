<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="somar.php" method="post">
        <input name="numero1" type="number"><br>
        <input name="numero2" type="number"><br>
        <button>Calcular</button>
    </form>

    <?php

    // o "isset" ele serve para checar se algo EXISTE LÁ

    if(isset($_POST["numero1"]) && isset($_POST["numero2"])){

    $n1 = $_POST["numero1"];
    $n2 = $_POST["numero2"];

    $soma = $n1 + $n2;

    if ($soma > 0) {
        echo("<span style='color:green;'>O resultado é $soma </span>");
    } else if ($soma < 0){
        echo("<span style='color:red;'>O resultado é $soma </span>");
    } else {
        echo("Insira um número válido:");
    }

    }
    ?>
</body>
</html>
<!-- -------------------------------------------------------------- -->
<!-- ESTRUTURA DE REPETIÇÃO -->

<!-- $x = 0 


while($x < 100) {
    echo("teste");
    $x++;
} -->
<!-- ////////////// -->
<!-- for ($x = 0 ; $x < 100 ; $x++){
    echo("Teste<br>")
} -->

<!-- Esses são dois exemplos de códigos para usar em estruturas de repetição, agora em qual situação você vai usar, depende de você -->