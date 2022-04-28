<?php

require_once 'classes/Produto.class.php';
require_once 'classes/Estoque.class.php';

//criando um produto e passando pra classe de estoque
class Main {

    private $produto; //criando os atributos
    private $estoque;

    public function __construct()
    {
        $this->produto = new Produto; // esse produto recebe uma estancia de produto 
        
        $this->produto->criar(['Melancia']); /// faz opeção para criar um produto nobo

        $this->estoque = new Estoque($this->produto); //assim que estanciamos estoque passa direto o produto
          
        
        
        //  var_dump($this->produto); // var dump ver tudo oq esta contido dentro
    
    }

}

new Main; // estanciar sempre se não , nada vai acontecer
