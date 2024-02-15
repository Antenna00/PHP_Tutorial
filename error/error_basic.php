<?php

/*
 * Error Types and hierarchy  
 *  [Throwabale]
 *      [Error]
 *          Arithmetic Error
 *              DivisionByZeroError //^Quite self-explanatory.
 *      [Exception]
 *          ...
 */

 //* [Error] -> Arithmetic Error
    //^ Happens when there is arithmetic error. Ex. bitshifting minus.
    try {
        $shif =-1;
        $number = 8;
        $result =  $number >> $shif;
    }catch(ArithmeticError){
        print("Arithmetic error is caught!" . "<br />");
    }

 //* [Error] -> Assertion Error
    //^Error thrown when assert() fails
    $myAge = 26;
    $res = assert($myAge = 26, "My age is wrong"); //! Does not give error.
    print($res); //^returns 1 (true)
    try {
    $res = assert($myAge > 26, "My age is wrong"); //! gives error and it stops executing further.
    print($res);
    }catch(AssertionError) {
        print("Assertion error is caught!" . "br />");
    }

    