<?php

$n = $_POST["nota"];

if ($n == 100) {
    echo("Sua nota é de ".$n.", seu conceito é A+"); 
} else if ($n >= 86 && $n <= 99){
    echo("sua nota é de ".$n.", seu conceito é A");
} else if ($n >= 71 && $n <= 85){
    echo("sua nota é de ".$n.", seu conceito é B");
} else if ($n >= 51 && $n <= 70){
    echo("sua nota é de ".$n.", seu conceito é C");
} else {
    echo("sua nota é de ".$n.", seu conceito é D");
}
?>
<br>
<a href="Index.html">voltar</a>