<?php

// print_r($_POST["ling"]);
// $vetor = [];
// $vetor = "oi";
// $vetor = "tchau";
// print_r($vetor[]);
$chave = 0;
while (isset($_POST["ling"][$chave])){
    echo($_POST["ling"][$chave]);
    echo("<hr>");
    $chave++;
}
// $lingugagens = $_POST["ling"];
// echo($linguagens[0]);

?>