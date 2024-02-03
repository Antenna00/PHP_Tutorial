<?php 

//* Accessing the char in string
$firstName = "Triss";

echo $firstName[1] . "<br />"; //^Outputs r
echo $firstName[-3] . "<br />"; //^Outputs i (minus is counted backward)

$firstName[0] = "A"; //^You can also replace

$firstName[15] = "W"; //^There is no array out of bounds in this case. Outputs "Ariss W"
echo $firstName . "<br />";
echo var_dump($firstName) . "<br />"; //^note that size of string will be +15

//* Heredoc "Treats same as double quote string"
$text = <<<TEXT
$firstName
Line 1
Line 2 
Line 3
    <div>
        <p>Hello</p>
        <p>World</p>
    </div>
TEXT; 

echo $text . "<br />"; //^Outputs in single line 
echo nl2br($text); //^using nl2br function will automatically break the line

//* Nowdoc  "Treats same as single quote string"
//^singlequote the identifier TEXT.
$text2 = <<<'TEXT'
Example of string spanning multiple lines
using nowdoc syntax. Backslashes are always treated literally,
e.g. \\ and \'.
TEXT;

