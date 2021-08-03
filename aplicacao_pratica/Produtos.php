<?php

class Produtos {

    private Pedido $pedido;
    private array $produtos;

    public function __construct(Pedido $pedido, array $produtos) {
        $this->pedido = $pedido;
        $this->produtos = $produtos;
    }

    public function comporPedido()
    {
        return $this->pedido->comporPedido($this->produtos);
    }

}
