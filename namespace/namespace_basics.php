<?php
/*
* Namespace is basically a way to group multiple items.
* Separating the namespace will avoid the name collision between the code.
* It also gives an ability to alias the name of variables or functions to imporove readability.
*/

//* Defining namespace
namespace my\name; //!must be the first statement in the script.With slash you can define subnamespace

class MyClass {};
function myFunction() {};
const MYCONST = 1;

$a = new MyClass; //^instantiate
$c = new namespace\MyClass; //^\my\name\myClass


