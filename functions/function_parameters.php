<?php
declare(strict_types=1);

function foo(int|float $x, int|float $y = 10) { //^you can also set the default value
    return $x + $y;
}

echo foo(5.0); //^default value set in function will be used
echo foo(5.0, 10) . "<br />";


function foo_inreference(int|float &$x, int|float $y): int|float {
    if($x % 2 == 0) {
        $x /= 2;
    }

    return $x * $y;
}

$a = 6.0;
$b = 7;

echo foo_inreference(x:$a, y:$b) . "<br />"; //^named argument x:$a 
echo $a . "<br />"; //^reference is passed thus value of a changes to 3. Output is 3.


//* Periodic Function
function sum(...$numbers): int|float { //^splat operator ...
    // $sum = 0;
    // foreach($numbers as $number) {
    //     $sum += $number;
    // }

    $sum = array_sum($numbers);
    return $sum;
}

$numbers = [10, 10];

//?You can also unpack the array with splat
echo sum($a, $b, 50, 100, ...$numbers) . "<br />"; //^ a = 3, b = 7 thus output is 160



