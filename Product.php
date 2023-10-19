<?php 

class Product
{
    public function __construct(
        public string $title,
        public int $price
    ){}
}