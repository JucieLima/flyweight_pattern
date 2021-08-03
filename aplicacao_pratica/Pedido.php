<?php

class Pedido
{

    private string $id = "";
    private float $valor;

    public function __construct(int $id, float $valor, array $items)
    {
        var_dump("Construindo produto número $id com o valor de " . number_format($valor, 2, ",", "."));
        $this->id = $id;
        $this->valor = $valor;
        $this->comporPedido($items);
    }

    public function comporPedido(array $items)
    {
        echo "<h3>Composição do produto {$this->id} </h3>";
        echo "Adicionar os seguintes itens: <br>";
        foreach ($items as $item) {
            echo "=> " . $item . "<br>";
        }
        echo "<h4>Total a pagar: " . number_format($this->valor, 2, ",", ".") . "</h4>";
    }


}
