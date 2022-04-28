<?php
require_once('Investimento.class.php');

class Clientes {
    private $id;
    private $nome;
    private $telefone;
    
    function criar(array $dados):bool{
        echo "\nInvestimento Criado\n";
        return true;  
    }

    function editar(int $id, array $dados):bool{
        echo "Cliente Atualizado";
        return true;
    }
    
    function apagar(int $dados):bool{
        echo "Investimento Apagado";

    }
       
}

