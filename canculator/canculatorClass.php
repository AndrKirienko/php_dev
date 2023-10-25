<?php

class Canculator
{
    
    public $a, $b;

    public function setA($a){
        $this->$a = $a;
    }
    public function setB($b){
        $this->$b = $b;
    }

    public function sum (){
        return $this->$a + $this->$b;
    }
}


//sum, division, difference, multiplicationм

?>