<?php

class Calculator
{
    
    private int|float $a;
    private int|float $b;


    public function setA(int|float $a)
    {
        $this->a = $a;
    }
    public function setB(int|float $b)
    {
        $this->b = $b;
    }

    public function sum (): int|float
    {
        return $this->a + $this->b;
    }

    public function division (): int|float
    {
        if(($this->a != 0) && ($this->b != 0))
        {
            return $this->a / $this->b;
        } else{
             echo 'error' . '<br>';
        }
    }

    public function difference (): int|float
    {
        return $this->a - $this->b;
    }

    public function multiplication (): int|float
    {
        return $this->a * $this->b;
    }

}

?>