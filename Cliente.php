<?php
require_once 'classes/Cliente.class.php'

class Main{

    private $cliente;

    public function __construct()
    {
        $this->cliente = new Cliente;

        $this->cliente->acao([]);

        $this->cliente->executaXpto();
    }

}
new Main;