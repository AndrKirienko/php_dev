<?php
    //інтернет - це розгалуджена система 
    // www -world wide web -всесвітня мережа
    //TCP - transmission control protocol -протокол керування передачею
    //Socket - комбінація IP-адреси і номера порту


    //die('hello'); //выводит текст и дальше код не будет работать, по типу break
    require('Cart.php');
    require('Product.php');
    require('Book.php');
    require('Laptop.php');
    require('ParentClass.php');
    require('ChildClass.php');

    use parent\ParentClass as p;

    $p = new p;

    var_dump($p->public);
    // var_dump($p->protected);
    //var_dump($p->private);

    die;

    $c = new ChildClass;
    var_dump($p->public);

    die;
    $a = new Cart; //просто створюємо об'єкт
    // $b = new Cart(); //в душки передаємо параметри
    // $c = new (Cart::class); //php 8.2

    //php psr - стандартні рекомендації по стилю написаню коду

    //var_dump($a->addProduct(new Product('phone', 100)));
    //var_dump(new Product('phone', 100));
    //var_dump($a->addProduct(
    //     [
    //         'title' => 'Book',
    //         'price' => 12
    //     ]
    // ));

    //var_dump($a->getTotalPrice());


    $cart = new Cart();

    $product = new Book('Book', 1200, '');
    var_dump($product->getPrice());
    $product2 = new Laptop('Laptop', 900, 'AMD');

    $cart->addProduct($product);
    $cart->addProduct($product2);
    echo "<pre>";
    var_dump($cart->products);
    echo "</pre>";
