<?php

class atleta{
    public $nome;
    public $peso;
    public $idade;
    public $cpf;
    public $modalidade;

    function receberAtributos($nome, $peso, $idade, $cpf, $modalidade){
        $this->nome = $nome;
        $this->peso = $peso;
        $this->idade = $idade;
        $this->cpf = $cpf;
        $this->modalidade = $modalidade;
    }
    function seApresentar(){
        return("O nome do atleta é: {$this->nome} <br> Seu peso é: {$this->peso} <br> Possui {$this->idade} anos. <br> CPF: {$this->cpf} <br> E pratica na modalidade de: {$this->modalidade}");
    }
}

?>
