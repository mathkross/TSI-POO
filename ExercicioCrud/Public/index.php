<?php

require_once '../Models/Cliente.class.php';
require_once '../Models/Investimento.class.php';

class Main {

    private Cliente $cliente;
    private Investimento $investimento;

    public function __construct(){

        $this->cliente = new Cliente;
        $this->investimento = new Investimento;

        $this->listarClientes();
    }

    public function listarClientes()
    {
        $clientes = $this->cliente->listar();

        
        foreach($clientes as $ind => $cliente){

            //recuperando carteira de investimentos
            $carteira = $this->investimento->carteiraCliente($cliente['id']);

            $totalAtivos = 0;

            
            foreach ($carteira as $cadaAtivo){

                $totalAtivos += $cadaAtivo['qtd'];
            }

            $clientes[$ind]['totalAtivos'] = $totalAtivos;
        }

        require_once '../Views/cliente.listar.php';
    }

}
new Main;
