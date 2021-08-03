<?php

include 'Cliente.php';

$cliente = new Cliente();

$cliente->adicionar("A", 1);
$cliente->adicionar("B", 2);
$cliente->adicionar("C", 3);
$cliente->adicionar("A", 4);
$cliente->adicionar("C", 4);

echo var_dump($cliente->getDados());
echo count($cliente->getDados());
echo '<hr>';
echo $cliente->getTotalInCache();
