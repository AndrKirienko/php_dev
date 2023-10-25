<?php
   
    include 'canculatorClass.php';
    
    $result = new Canculator;
    
    $result->setA(3);
    $result->setB(4);
    echo $result -> sum();
    
?>