<?php

$programmingLanguages = ['PHP', 'Java', 'Python'];

echo $programmingLanguages[0] . "<br />";

//*isset
$bool = isset($programmingLanguages[2]); //^determine if array is already set or not.
echo $bool . "<br />";

$programmingLanguages[1] = 'C++'; //^replace the value

echo '<pre>'; //^This just makes it look prettier :)
print_r($programmingLanguages);
echo '<pre/>';

$programmingLanguages[] = 'Java'; //^passing in empty index will add the value.
print_r($programmingLanguages) . "<br />";

//* array_push
