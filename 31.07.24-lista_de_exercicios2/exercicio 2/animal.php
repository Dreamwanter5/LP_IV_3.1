<?php

class animal{
    public $nome;
    public $peso;
    public $idade;
    public $raca;
    public $altura;

    function receberAtributos($nomeNovo, $pesoNovo, $idadeNovo, $racaNovo, $alturaNovo){
        $this->nome = $nomeNovo;
        $this->peso = $pesoNovo;
        $this->idade = $idadeNovo;
        $this->raca = $racaNovo;
        $this->altura = $alturaNovo;
    }
    function seApresentar($idade){
        if($this->ida < 0){
            $ida = 0;
            $this->idade = $ida;
            return("Idade inválida");
        } else {
            return("O nome do animal é: {$this->nome} <br> Seu peso é: {$this->peso} <br> Possui {$this->idade} anos. <br> Raça: {$this->raca} <br> Possui : {$this->altura} metros");
        }
        
    }
}

?>
