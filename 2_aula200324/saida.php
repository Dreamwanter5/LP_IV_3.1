<?php
$email = $_POST["email"];
    $senha = $_POST["senha"];

    if($email == "estevan@ifpr.edu.br" && $senha == "123456"){
        echo("Logou");
    }
    else if($email != "estevan@ifpr.edu.br" && $senha == "123456"){
        header("location:entrada.php?erro=2");
    }
    else if($email == "estevan@ifpr.edu.br" && $senha != "123456"){
        header("location:entrada.php?erro=3");
    }
    else{
        header("location:entrada.php?erro=1");
    }

?>
<br>
<a href="entrada.php">Voltar</a>