<?php

//Return Values from function

function addNumber($num1, $num2) {
    $sum = $num1 + $num2;
        return $sum;
}

$result = addNumber(5,2);

$result = addNumber(10,$result); //to add another value to the $result

echo $result;