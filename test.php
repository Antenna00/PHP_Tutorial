<?php
	
	//basic print
	echo 'Hello World'; //single and double quote both works
	print 'Hello World'; //it's similar to echo but has a return value of 1...

	echo print 'Hello World'; //the "print 'Hello World' " returns 1. This outputs Hello World1
	print('Hello World'); //Parenthesis works
	echo 'Hello', ' ', 'World', ' ', 'Concatenate'; //Concate with comma

	echo "Joe's Invoice \n"; //escape with slash \'. Surrounding with double quotation works
	
	echo 'test', PHP_EOL;

	
	echo '<br/>';
	//* Variable Declaration and Usage

	/* 
	?Variable can't be declared with special character or numbers. 
	?And some syntaxt already in used by core API such as 'this'
	*/
	$_123 = 'Waifu'; //?Underscore works.
 	$name = 'Trissis';
	echo $name, $_123;

	//?Variable in php is assigned as value by default.
	$x = 1;
	$y = $x; //^assign 1

	$x = 3; //^change x to 3. 
	echo $y; //!Outputs 1. Changing the value will not affect because everything is assigned by value by default

	//?To make change assign the & to represent the reference.
	$y = &$x; //^get the reference of x
	$x = 3;	//^change x to 3 (also affects the y since y refer to the x' reference)
	echo $y; //!Outputs 3

	//?Operator
	echo "Hello {$name}"; 
	echo "Hello ", $name;
	echo "Hello " . $name;
//?>
<!-- Note that closing tag in unnecessary if it's only PHP code.
	It requires when only php is implemented in html -->
