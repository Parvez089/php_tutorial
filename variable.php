<?php

// Variable = a reusable container that holds data string, integer, float, boolean
    $name = "Parvez";
    $food = "Pizza";
    $email = "abc123@gmail.com";

    $age = 21;
    $users = 2;
    $quantity = 5;

    $gpa = 2.5;
    $price = 4.99;
    $tax_rate = 5.1;

    $employed = true;
    $online = true;
    $for_sale = true;

    echo "You have ordered {$quantity} X {$food}s <br>";
    $total = $quantity * $price;
    echo "Your total is: \${$total}";

    // echo "Hello {$name} <br>";
    // echo "You like {$food} <br>";
    // echo "Your email is {$email} <br>";

    // echo "You are {$age} years old<br>";
    // echo "There are {$users} users   <br>";
    // echo "You would like to buy {$quentity} items <br>";
    // echo "Your gpa is : {$gpa} <br>";
    // echo "Your pizza is \${$price} <br>";
    // echo "The sales tax rate is : {$tax_rate}%<br>";
    
    // echo "online status: {$online}";
?>