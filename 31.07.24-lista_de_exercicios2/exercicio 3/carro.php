
<?php

// 3) Criar uma classe chamada Carro. Ela deve possuir os seguintes atributos: placa do carro, eficiencia, tamanho do tanque e ano. No campo de eficiencia, deve ser registrado quantos kilometros por litro ele faz. Criar 1 método que receba uma distância (em km), que ele pretende viajar, e o método retorna quantas vezes ele vai ter que parar para reabastecer (considerando o quanto de gasolina ele tem no momento). Crie uma página que o usuário possa informar os dados (atributos do carro e qual a distância da viagem que ele pretende fazer), e o sistema deve informar quantas paradas ele deve fazer.

    class Carro {
        public $placa;
        public $eficiencia; #quantos KM por litro
        public $tamanho_tanque;
        public $ano;

        function receberAtributo($placa, $eficiencia, $tamanho_tanque, $ano) {
            $this->placa = $placa;
            $this->eficiencia = $eficiencia;
            $this->tamanho_tanque = $tamanho_tanque;
            $this->ano = $ano;
        }

    
        function calcularParadas($distancia, $eficiencia, $tamanho_tanque) {
            $eficiencia_tanque = $this->eficiencia * $this->tamanho_tanque;
            $paradas = 0;

            if ($eficiencia_tanque == 0) {
                return "O tanque está vazio, você precisará abastecer antes de começar.";
            } elseif ($distancia <= $eficiencia_tanque) {
                return "Nenhuma parada será necessária. O carro pode completar a viagem sem reabastecer.";
            } else {
                $paradas = ($distancia / $eficiencia_tanque) - 1; 
                return "Você precisará fazer $paradas parada(s) para reabastecer durante a viagem.";
            }
        }

    }



?>