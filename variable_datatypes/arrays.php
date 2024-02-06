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
array_push($programmingLanguages, 'C#', 'C', 'Rust'); //^append values.

//* assigning key-value
//? In php, array could work similar to dictionary or hashmap where there are key-value pairs.
$programmingLanguages_pairs = [
    'php' => '8.0',
    'rust' => '10.0'
];

echo $programmingLanguages_pairs['rust'] . "<br />"; //^call value from key
$programmingLanguages_pairs['go'] = '2.5'; //^can add value


$programmingLanguages_nested = [
    'Rin' => [
        'fullname' => 'Rin Kitajima',
        'age' => '26',
        ['hobby1' => 'coding', 'hobby2' => 'anime']
    ],
    'Triss' => [
        'fullname' => 'Triss is Waifu',
        'age' => '23'
    ]
];

print_r($programmingLanguages_nested['Rin']) . "<br />";
echo $programmingLanguages_nested['Rin']['fullname'] . "<br />"; //^number index doesnt work :/
echo $programmingLanguages_nested['Rin'][0]['hobby2'] . "<br />";

$array_override = [
    true => 'a', //^true = 1
    1 => 'b', //^ true = 1 = 1 thus overwrite
    '1' => 'c', //^literal 1 and integer 1 is considered same in key thus overwrite
    1.8 => 'd', //^integer of 1.8 is rounded down to 1 thus overwrite
    null => 'e'
]; //? note: null become the empty string 

print_r($array_override); //^output = [1] => d
print_r($array_override['']); //^empty string = null
echo "<br />";

$array_order = ['a', 'b', 50 => 'c', 'd', 'e']; //^ index order become 0, 1, 50, 51, 52, 53
print_r($array_order);
echo "<br />";

unset($array_order[50]); //^you unset multiple variable if needed
print_r($array_order); //^ 0, 1, 51, 52


//?maximum integer key is retained even you unset.
$array = [1,2,3];
unset($array[0],$array[1],$array[2]);
//^It looks like this is will be added to index of 0 but it actually goes to 3 because maximum index is retained even after unsetting
$array[] = 1;
print_r($array);

array_values($array); //^array_values can reorganize the index.
