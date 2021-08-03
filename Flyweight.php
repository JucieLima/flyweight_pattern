<?php

class Flyweight {
    
    private string $id = "";    
    
    public function __construct(string $id) 
    {
        var_dump("Construção de $id");
        $this->id = $id;
    }
    
    public function fazerAlgo(string $extrinseco) 
    {
        echo "Fazendo algo {$extrinseco} com o {$this->id} intrínseco";
    }

    
}
