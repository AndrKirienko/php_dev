<?php

//declare(strict_types=0);
//ini_set('strict_types','0');

class Cart
{
    public array $products;
    
    public function addProduct($product) : static 
    { //передавати тип параметру
        $this->products[] = $product;

        return $this;
    }
                                     //передавати тип резльтату функції
    public function getTotalPrice() : int|float //| - or відповідь функції або инт або флоат
    {
        $total = 0;
        foreach($this->products as $product){
            $total += $product['price'];
        }

        return $total;
    }
}
