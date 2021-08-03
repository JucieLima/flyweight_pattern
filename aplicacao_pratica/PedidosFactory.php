<?php

include 'pedido.php';

class PedidosFactory {
    
    private array $pedidos = [];

    public function getPedido(int $id, float $valor, array $items) : Pedido
    {
        if(!isset($this->pedidos[$id])){
            $this->pedidos[$id] = new Pedido($id, $valor, $items);
        }

        return $this->pedidos[$id];
    }

    public function getTotalPedidos(): int
    {
        return count($this->pedidos);
    }
}
