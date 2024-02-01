<?php
//* Data Types & Type Casting


//* Scalar Types
//    ? bool
    $completed = true; //^it will be printed as 1 =/ 0
    $incompleted = false;
//    ? int
    $num = 1;
    $num_2 = -1; //^can hold minus
//    ? float
    $val = 0.1;
    $val_2 = -20.8;
//    ? string
    $hello = "Hello World";

    echo gettype($hello) . "<br />"; //^you can check the type with gettype function
    echo var_dump($completed) . "<br />"; //^get the type and data inside

//* Compount Types
//    ? array
    $arr = [1, 2, 3, "A", "b", true]; //^it's growable

    //*more of below in separate files
//    ? object
//    ? callable
//    ? iterable

    echo print_r($arr);  //print_r only accepts string and bool by default. giving int will result in autocasting to string
    // echo print($arr); //^regular print will give error as it requires conversion to readable form


//* Special Types
//    ? resource
//    ? null


function sum($x, $y) {
    return $x + $y; 
}

echo "<br/>" . sum(2, 3) . "<br/>" ;
echo sum(2,'3') . "<br/>"; //^you can pass the string and still works. Auto casting happens in addition operation

$sum = sum(2,5); //^ you can also assign the result of function to variable

//?Type juggling, Type coercion
function sum2(int $x, int $y) { //^now you can specify what type function must receive
    return $x + $y;
}

echo sum2(2, '3') . "<br/>"; //^however this still works, because of type coercion, auto casting happens.

//!BUT, there are certain thing that can't be coerce, like int -> array wont work.
echo sum2(2.2, 3) . "<br/>"; //^It works but float -> int coercion doesnt work so you get error and output of 5.

//?There is strict mode where you can implement the strict types
declare(strict_types = 1); //^it's still runnable but the compiler will tell you to fix. you can still pass around int <-> float even with strict mode turned on

echo "<br/>" . "<br />";

//* Casting
$castX  = (int) '5';
echo var_dump($castX); //^outputs int(5)


