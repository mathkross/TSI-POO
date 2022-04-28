<?php
chdir(__DIR__);
require_once 'Usuario.class.php';
require_once '../interfaces/Usuario.interface.php';

class Cliente extends Usuario implements iUsuario {

    public function __construct()
    {
        parent::__construct(); //quando estanciar a classe cliente, vai executar tanto o metodo construtor da classe cliente, quanto a do Usuario
        echo "\nConstrutor da classe Cliente\n";
    }

    public function executaXpto()
    {
        $this->xpto();
    }

    public function acao(array $idProdutos):bool
    {
        echo "Executou ação do cliente";
        return true;
    }
}