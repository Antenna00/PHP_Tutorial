<?php

//*Constants
//?here are 2 ways to define constants in php

//! constant defined in define function is defined in run time
define('STATUS_PAID', 'paid'); //^it is case sensitive. Third param is deprecated
echo STATUS_PAID;
echo defined('STATUS_PAID'); //^you can check if variable exists. It returns boolean, 1 for true

//Another way
//! constant defined is defined in compile time
const STATUS_PAID_2 = 'paid';

if(true) {
    //^can't define const variable here because if statement is evaluated at runtime. const variable must go to global scope.
    //const FOO = 'bar'; 

    //^However define() function defines at runtime so it works.
    define('NUMBER', 1);

}

//?You can dynamically define constant
$paid_3 = "_PAID_3";
define("STATUS" . $paid_3, $paid_3);
echo STATUS_PAID_3; //^It gives error but still works. Unrecomendded though.

echo "<br/>";

//?There are PHP predefined constants like below
echo PHP_VERSION;
echo "<br />";
echo __LINE__;
echo "<br />";
echo __FILE__;
echo "<br />";


//* Variable variables
/*
? It takes the variable value and creates another variable
*/

$foo = 'bar';
$$foo = 'baz'; //^It is essensially saying $bar = 'baz';
echo $foo, $bar; //^bar is defined in line 43
echo $foo, $$foo; //^This also works


//?>