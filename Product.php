<?php 

class Product
{
    public string $title;
    
    public int $price;

    public function __construct(
        string $title = 'Parent' ,
        int|float $price = 0,
    ){
        $this->title = $title;
        $this->setPrice($price);
    }

    public function setPrice(int|float $price): object
    {
        $this->price = $price*100;

        return $this;
    }

    public function getPrice(): int|float
    {
        return $this->price/100;
    }

    public function getInfo()
    {
        return "Product info: \n{$this->title},{$this->price}";
    }

}