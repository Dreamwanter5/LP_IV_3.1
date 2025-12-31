<pre>
    <!-- O pré organiza o php -->

<?php

$vetor = [];

$vetor[0] = "Estevan";
//print_r($vetor); - Pode ser usado para dar print no vetor
$vetor[1] = 183;
$vetor[10000000] = 100000;
var_dump($vetor);

echo($vetor[10000000]);

$res = $vetor[1] * 2;

echo($res);

//É possível também criar vetores da seguinte forma "$vetor[]" se você não adicionar nada aos colchetes, o vetor cria o número sozinho a partir do número mais alto.
//Se você quiser mostrar alguma coisa específica, você pode digitar $vetor[numero desejado]

//sobre vetores é possível controlar o índice de vetores criando várias variáveis dentro do próprio vetor.

$vetor = [];
$vetor["nome"] = "Estevan";
$vetor["Altura"] = 1.83;
$vetor["idade"]= 38;


?>
</pre>
