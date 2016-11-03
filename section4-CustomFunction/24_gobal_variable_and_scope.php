<?php

//Converting a local variable into a global variable inside a function

$x = "outside"; //global

function convert() {
    global $x; //this code will convert the local varibale $x into a global variable
    $x = "inside"; // local
}

echo $x; //this will echo the first variable

echo "<br>";

convert();
echo $x; //this code is in global scope, but we can access now the local scope inside the function
