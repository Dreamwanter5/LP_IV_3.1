<?php

$usuario = "Pedro";
$senha = "1234";

if ($_POST["user"] == $usuario && $_POST["senha"] == $senha){
    echo("Entrada bem sucedida, seja bem-vindo<br>"); 
} else {
    header("location:login.html");
    echo("Usuário inválido<br>");
}

?>

<a href="login.html" >Voltar</a>