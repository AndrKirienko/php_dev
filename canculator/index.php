<?php
   
    include 'Calculator.php';
    
    $result = new Calculator;
    
    $result->setA(7);
    $result->setB(0);
    echo "sum = " . $result -> sum() .  '<br>';
    echo "difference= " . $result -> difference() .  '<br>';
    echo "multiplication = " . $result -> multiplication() .  '<br>';
    echo "division = " . $result -> division() .  '<br>';
?>