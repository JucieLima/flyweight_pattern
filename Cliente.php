<?php

require 'FlyweightFactory.php';
require 'Extrinseco.php';

class Cliente {

    private FlyweightFactory $flyweightFactory;
    private array $dados;

    public function __construct() {
        $this->flyweightFactory = new FlyweightFactory();
    }
    
    public function adicionar(string $id, int $valor) : void
    {
        $this->dados[] = new Extrinseco(
                $this->flyweightFactory->getFlyweight($id),
                $valor
                );
    }
    
    public function getDados() : array
    {
        return $this->dados;
    }
    
    public function getTotalInCache() : int
    {
        return $this->flyweightFactory->getTotalInCache();  
    }

}
