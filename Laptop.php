<?php

class Laptop extends Product
{

    public string $cpu = 'AMD';
    
    public function __constant(
        string $title,
        int $price,
        string $cpu,
    ){
        parent::__construct($title,$price); //взяти властивості та методи батька
        $this->cpu = $cpu;
    }

    public function setPrice(int|float $price): object
    {
        $this->price = $price;
        return $this;
    }

    public function getInfo()
    {
        $info = parent::getInfo();
        return "{$info}, {$this->cpu}";
    }
}
