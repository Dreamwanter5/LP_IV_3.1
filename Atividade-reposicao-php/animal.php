<?php
// 1) Crie uma classe que representa um Animal. Esta classe deve conter:
// * 5 atributos PRIVADOS (vocês escolhem quais atributos criar)
// * Um construtor que receba valores para os atributos
// * Métodos de acesso aos atributos, seguindo a convenção dos nomes get e set
// Uma vez a classe criada, você deve permitir o usuário informar os dados do animal, e você deve criar um objeto com os dados informados.
// 2) Utilizando a classe Animal, criada no primeiro exercício, realize os seguintes passo:
//  * Criar 2 objetos, animal1 e animal2.
//  * Você deve preencher os dados do animal1 (não precisa criar o html, pode ser dados inseridos diretamente).
//  * Copiar os dados do animal1 para o animal2.
//  * Depois de copiado, alterar o nome do animal2 e garantir que o nome do animal1 não tenha sido alterado também.
//  * Mostrar os nomes dos animais para ver se estão diferentes.

class Animal{
    private $nome;
    private $idade;
    private $peso;
    private $tipo;
    private $raca;

    // A partir de agora é mais prominente usar métodos para obter e para devolver nomes, é algo mais seguro que evita falhas

    // function __construct(){
    //     $this->setNome("A inserir");
    //     $this->setIdade(100);
    //     $this->setPeso(1000);
    // }

    //Ao criar um construtor dessa forma, eu tenho um método especial obrigatoriamente chamado quando eu crio o objeto que necessita desses parâmetros para existir.
    function __construct($nome, $idade, $peso, $tipo, $raca){
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setPeso($peso);
        $this->setTipo($tipo);
        $this->setRaca($raca);
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
    
    function getRaca(){
        return $this->raca;
    }
    function setRaca($raca){
        $this->raca = $raca;
    }
    function getTipo(){
        return $this->tipo;
    }
    function setTipo($tipo){
        $this->tipo = $tipo;
    }
}
?>