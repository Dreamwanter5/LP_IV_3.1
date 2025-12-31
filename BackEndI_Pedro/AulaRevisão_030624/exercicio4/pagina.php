<!-- 4 – Criar uma página em que o usuário possa digitar 2 números, e ao clicar no botão,
deve-se mostrar a soma dos números digitados. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
</head>
<body>
    <form action="pagina.php" method="post">
    Numero 1: <input name="numero1" type="number"><br>    
    Numero 2: <input name="numero2" type="number"><br>    
    <button>Calcular</button>
    </form>

    <?php
    $n1 = $_POST["numero1"];
    $n2 = $_POST["numero2"];
    $soma = $n1 + $n2;
    
    echo("<br>Resultado: $soma");
    ?>

</body>
</html>