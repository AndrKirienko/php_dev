<?php

class Book extends Product
{

    public string $author = 'Author';

    public function getInfo(){
        $info = parent::getInfo();
        return "{$info}, {$this->author}";
    }
}
