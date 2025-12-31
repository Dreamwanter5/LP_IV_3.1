    <?php

        include("carro.php");

        $placa = $_POST["placa"];
        $eficiencia = $_POST["eficiencia"];
        $tamanho_tanque = $_POST["tamanho_tanque"];
        $ano = $_POST["ano"];
        $distancia = $_POST["distancia"];

        $carro = new Carro($placa, $eficiencia, $tamanho_tanque, $ano);

        $carro->receberAtributo($placa, $eficiencia, $tamanho_tanque, $ano);
        $resultado = $carro->calcularParadas($distancia, $eficiencia, $tamanho_tanque);

        echo ("Para a distancia percorrida de: ".$distancia."km, ".$resultado);
    ?>
