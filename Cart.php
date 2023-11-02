<?php

//declare(strict_types=0);
//ini_set('strict_types','0');

class Cart
{   
    public static $i=1;
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
        echo Cart::getHeader();
        var_dump(self::$i);
        return $total;

    }
    public static function getHeader() //не можемо використовувати this
    //виклику методів класу без створення об'єкта цього класу
    //розширюється на всі методи класу
    //
    {
        return 'Header from method';
    }
}
