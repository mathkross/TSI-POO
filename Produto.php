<?php

require_once('classes/Produto.class.php'); //chamando as dependencias

class Main {

    private $produto; //criando um atributo produto


    public function __construct() //metodo construtor : ser executado quando estancia a classe (__construct())
    {
       $this->produto = new Produto;

       $vetor = [];

       $this->novo($vetor); // em codigos grandes é muito importante, criou um apelido para o metodo que foi criar
    }

    function novo($vetor):void
    {
        
        if(is_array($vetor) ){

            $this->produto->criar($vetor); // caso seja um vetor eu ja chamo o metodo antes
        }else{
            throw 'Erro';
        }
    }

    public function __destruct()
    {
        echo "\nDestrutor Executado\n";
    }

}

$main = new Main;  //estanciando o main


 
