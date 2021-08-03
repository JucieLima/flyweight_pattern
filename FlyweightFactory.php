<?php

include 'Flyweight.php';

class FlyweightFactory {
   private array $flyweights = [];
   
   public function getFlyweight(string $id) : Flyweight
   {
       if(!isset($this->flyweights[$id])){
           $this->flyweights[$id] = new Flyweight($id);
       }
       
       return $this->flyweights[$id];
   }
   
   public function getTotalInCache(): int
   {
       return count($this->flyweights);
   }
}
