<?php

$y = 1;

$fn1 = fn($x) => $x + $y; //^using parent scope variable in fn(): arrow function is automatic

$fn2 = function ($x) use($y){ //^y object copied
    return $x + $y;
};

var_export($fn2(3) . "</br>"); //^ 3+1 = 4


$z = 1;
$fn3 = fn($x) => fn($y) => $x + $y + $z;

$res = $fn3(2);
var_export($res(2) . "<br />");


//* Inhering variables from parent scope
$message = "hello";
$example = function () use($message){
    var_dump($message . "<br />");
}; 
$example(); //^Output is "hello"

$message = "world"; 

$example(); //^Output is still "hello". 
//? This happens because, inherited variable's value
//? is from when the function is DEFINED and not when called.

$message = "hello"; //^Reset the value

$example = function() use(&$message) { //!Take message by reference
    var_dump($message. "<br />");
}; 
$example(); //^Now this outputs "hello"

$message = "world"; //^change the value

$example(); //^Output is "world"


          
