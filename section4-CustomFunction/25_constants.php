<?php

//Constants - a container that we can put information and write data, but it does not change
//define function
define("constantName", 1000); //first parameter is the constant_name and the second would be the value(it can be a string, number, etc)

echo constantName;

//try adding new constant value
// we set new constant - this will print error because we cant change a constant

 define("constantName", 1000); //first parameter is the constant_name and the second would be the value(it can be a string, number, etc)

constantName = 2000; // we set new constant - this will print error because we cant change a constant.

echo constantName;