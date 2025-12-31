<?php
    include_once("classe.php");
    $pessoa = new Pessoa("Estevan", 36, 1000); 
    //Caso eu queira que seja editável eu posso simplesmente usar o $_POST[] para pegar as informações de uma página html.
    echo($pessoa);   
    echo($pessoa->getNome());
    //Desse modo, o comando vai imprimir o nome selecionado
?>