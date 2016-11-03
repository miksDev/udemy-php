<?php

//Parsing Param in a Function

example1
function greeting($message) {
    echo $message;
}

greeting("Hi");


//example2 - Parsing 2 Param
function addNumber($num1, $num2) {
    $sum = $num1 + $num2;
        echo $sum;
}

addNumber(5, 3);