<?php
$email = $_POST["email"];
$senha = $_POST["senha"];

if($email == "email@ifpr.edu.br" && senha=="123456"){
    //Logou
    $_SESSION["logado"] = $email;
    header("location:perfil.php");
} else{
    //Não logou
    header("location:login.php");
}
?>