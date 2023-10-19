<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //інтернет - це розгалуджена система 
    // www -world wide web -всесвітня мережа
    //TCP - transmission control protocol -протокол керування передачею
    //Socket - комбінація IP-адреси і номера порту

   
    //die('hello'); //выводит текст и дальше код не будет работать, по типу break
    require('Cart.php');
    require('Product.php');
    $a = new Cart; //просто створюємо об'єкт
   // $b = new Cart(); //в душки передаємо параметри
   // $c = new (Cart::class); //php 8.2
   
    //php psr - стандартні рекомендації по стилю написаню коду
    
    var_dump($a->addProduct(new Product('phone', 100)));
    var_dump(new Product('phone', 100));
    var_dump($a->addProduct(
        [
            'title' => 'Book',
            'price' => 12
        ]
    ));

    //var_dump($a->getTotalPrice());
   

    ?>
</body>

</html>