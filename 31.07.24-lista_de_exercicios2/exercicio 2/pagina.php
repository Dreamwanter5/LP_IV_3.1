<?php

include("animal.php");

$nome = $_POST["nome"];
$peso = $_POST["peso"];
$raca = $_POST["raca"];
$idade = $_POST["idade"];
$altura = $_POST["altura"];

$animal = new animal();
$animal->receberAtributos($nome, $peso, $idade, $raca, $altura);
echo $animal->seApresentar();
?>
<a href="index.html"><br> voltar</a>