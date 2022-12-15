<?php

$numbers = [1, 44, 55, 22];
$fruits = array('apple', 'orange', 
'pear');

print_r($numbers);
echo $fruits[1];

$colors = [
    1 => 'red',
    2 => 'yellow'
];

print_r($colors);

echo $colors[2];

$hex = [
    'dark' => '#000000'
];

echo $hex['dark'];

$person = [
    'first_name' => 'John',
    'last_name' => 'Bred'
];

print_r($person);

$people = [
    [
    'first_name' => 'John',
    'last_name' => 'Bred'
    ],
    [
    'first_name' => 'Bebe',
    'last_name' => 'Laise'
    ]
];

echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';

echo $people[1]['first_name'];

var_dump(json_encode($people));

?>