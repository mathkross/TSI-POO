<?php
require_once('Cliente.class.php');
require_once('Ativos.class.php');

class Investimentos extends Clientes {
    private $id;
    private $idativo;
    private $quantidade;

    public function criarInvestimento(array $dados):bool
    {
        echo "\nInvestimento Criado\n";
        return true;        
    }
    
    public function atualizar(array $dados, int $id):bool {
        echo "Investimento Atualizado";
        return true;
    }

    public function listar(int $id = null):array{
        echo "Lista de Investimentos";
        return [];
    }

    public function apagar(int $dados):bool {
        echo "Investimento Apagado";

    }
}