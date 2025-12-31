<?php
$linguagens = $_POST["ling"];
$chave = 0;
$tamanho = sizeof($linguagens);
foreach($linguagens as $valor){
    echo("$valor");
    echo("<hr>");
    $valor++;
}

if ($tamanho > 0 and $tamanho <= 4){
    echo("Despreparado");
    echo("<hr>");
}else if ($tamanho >= 5 and $tamanho <=7){
    echo("Contando com a sorte");
    echo("<br>");
}else if ($tamanho >= 8 and $tamanho <=9){
    echo("Preparado");
    echo("<br>");
} else {
    echo("Calma Pikachu, só mês que vem");
}
?>