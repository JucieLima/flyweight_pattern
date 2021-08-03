<?php

require 'PedidosFactory.php';
require 'Produtos.php';

class Cardapio {

    private PedidosFactory $pedidosFactory;
    private array $dados;

    public function __construct() {
        $this->pedidosFactory = new PedidosFactory();
    }

    public function adicionarPedido(int $id, float $valor, array $produtos) : void
    {
        $this->dados[] = new Produtos(
            $this->pedidosFactory->getPedido($id, $valor, $produtos),
            $produtos
        );
    }

    public function getDados() : array
    {
        return $this->dados;
    }

    public function getTotalPedidos() : int
    {
        return $this->pedidosFactory->getTotalPedidos();
    }

}
