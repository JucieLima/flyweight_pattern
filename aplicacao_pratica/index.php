<?php

require "Cardapio.php";

$cardapio = new Cardapio();

$cardapio->adicionarPedido(1, 25.90,['Orégano', "cebola", "quentro"]);

echo var_dump($cardapio->getDados());

echo "Total de pedidos adicionados: " .count($cardapio->getDados());
echo '<hr>';
echo "Total de novos itens produzidos: " . $cardapio->getTotalPedidos();