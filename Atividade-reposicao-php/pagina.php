<?php
    include_once("animal.php");

    echo("<h4>Exercío 1</h4>");
    $animal = new animal("Tobias", 2.5, 6, "raposa", "Raposa do ártico");
    echo($animal->getNome());
    echo("<br>");
    $animal->setNome("Toby");
    echo($animal->getNome());

    echo("<br>");
    echo("-----------------------------<br><h4>Exercío 2</h4><br>");    

    $animal1 = new animal("Caxumba", 1, 10, "Tamandua", "Tamandua-bandeira");
    $animal2 = new animal(
        $animal1->getNome(),
        $animal1->getIdade(),
        $animal1->getPeso(),
        $animal1->getTipo(),
        $animal1->getRaca(),
    );

    echo("Nome do Animal 1: ".$animal1->getNome()."<br>Nome do Animal 2: ".$animal2->getNome());

    // Mudando nomes
    $animal2->setNome("Antonieta Madalena");
    echo("<br><br><b>Mudança de nomes</b>");

    echo("<br>Nome do Animal 1: ".$animal1->getNome()."<br>Nome do Animal 2: ".$animal2->getNome()."<br>");

    echo("<br>");
    echo("-----------------------------<br><h4>Exercío 3</h4><br>");

    $animais = [];
    $animais[] = new animal("Ronaldo", 5, 65, "Gato", "galático");
    $animais[] = new animal("Alexandre", 25, 0.5, "Aranha", "Armadeira");
    $animais[] = new animal("CNPJ", 3, 0, "Jurídico", "Receita Federal");

    for ( $i = 0; $i < 3; $i++ ) {
        echo("<br>Animal: ".$i+1);
        echo("<br>Nome do animal ".($i+1).": ".$animais[$i]->getNome());
        echo("<br>Idade do animal ".($i+1).": ".$animais[$i]->getIdade());
        echo("<br>Peso do animal ".($i+1).": ".$animais[$i]->getPeso());
        echo("<br>Tipo do animal ".($i+1).": ".$animais[$i]->getTipo());
        echo("<br>Raça do animal ".($i+1).": ".$animais[$i]->getRaca());
        echo("<br>....................................................");
    }
    


?>