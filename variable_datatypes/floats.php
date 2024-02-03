<?php


$x = ceil((0.1) + 0.7 * 10); //^round up
$y = floor((0.1) + 0.7 * 10); //^round down

echo $x . $y . "<br />";

//^NAN (couldn't compute it for somereason thus undefined = Not A Number),
//^INF (out of types bound)

$num = 5;
$castFlow = (float) $x;
$float_num = floatval($x); //^work like a casting

