<?php

class Extrinseco {
    
    private int $valor;
    private Flyweight $intrinseco;
    
    public function __construct(Flyweight $intrinseco, int $valor) {        
        $this->intrinseco = $intrinseco;
        $this->valor = $valor;
    }

}
