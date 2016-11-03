<?php

//pre-defined array function

//max() - to print the biggest element of the array
$list = [2,4,6];

echo max($list);

echo "<br>";

//min() - to print the smallest element of the array
$list = [2,4,1,6];

echo min($list);

echo "<br>";

//print_r - to show the elements of the array
$list = [2,4,1,6];

echo print_r($list);

echo "<br>";

//sort - to short the element of the array
$list = [2,4,1,6];

echo sort($list);
print_r($list);

echo "<br>";

//in_array function

$string = "asasdasd";

$values = ['gjhg',55,'asdfdg',546, $string];
$found = in_array($string,$values); //finding the $string inside the $value

if ($found) {
    echo "Wow! You found it";
} else {
    echo "We could not find it"
}