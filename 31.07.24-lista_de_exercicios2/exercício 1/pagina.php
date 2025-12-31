<?php

include_once("atleta.php");

$nome = "Duda leme";
$idade = "20";
$cpf = "1312211829992";
$peso = 62;
$modalidade = "ginástica";

$atleta = new atleta();
$atleta->receberAtributos($nome, $peso, $idade, $cpf, $modalidade);
echo($atleta->seApresentar());


?>