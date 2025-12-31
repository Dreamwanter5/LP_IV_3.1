<?php
    class Pessoa{
        private $nome;
        private $idade;
        private $peso;

        // A partir de agora é mais prominente usar métodos para obter e para devolver nomes, é algo mais seguro que evita falhas

        // function __construct(){
        //     $this->setNome("A inserir");
        //     $this->setIdade(100);
        //     $this->setPeso(1000);
        // }

        //Ao criar um construtor dessa forma, eu tenho um método especial obrigatoriamente chamado quando eu crio o objeto que necessita desses parâmetros para existir.
        function __construct($nome, $idade, $peso){
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->setPeso($peso);
        }

        function __tostring(){
            return"Dados do Objeto:<br>Nome:".$this->nome;
        }
        // GetNome serviria para poder retornar um nome, é basicamente uma forma garantida de dar eco
        function getNome(){
            return $this->nome;
        }
        function setNome($nome){
            $this->nome = $nome;
        }

        function getIdade(){

            return $this->idade;
        }
        function setIdade($idade){
            $this->idade = $idade;
        }

        function getPeso(){
            return $this->peso;
        }
        function setPeso($peso){
            $this->peso = $peso;
        }
    }

?>