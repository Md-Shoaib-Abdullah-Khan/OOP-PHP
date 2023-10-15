<?php

    require_once './Book.php';
    require_once './Customer.php';


    $book1 = new Book("1234", "Hello Bangladesh", "Shoaib", 150);
    $customer1 = new Customer(123, "Shoaib", "Khan", "shoaib.a.khan@gmail.com");

    echo $book1->__toString();
    echo $customer1->__toString();

    
    echo "</br>".$book1->getCopy();

?>