<?php

$fruits = ['apple', 'banana', 'pear'];

// Get length
$length = count($fruits);

// Search
$isExists = in_array('apple', $fruits);

// Adding
array_push($fruits, 'grape');
array_unshift($fruits, 'orange');

// Remove from array
array_pop($fruits);
array_shift($fruits);
unset($fruits[2]);


$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = array_merge($arr1, $arr2);

echo '<br />';

print_r($arr3);

echo '<br />';

print_r($fruits);

$a = ['green', 'orange'];
$b = ['orange', 'black', 'white'];

// $a values will be the keys and the $b-s are the values
$c = array_combine($a, $b);

// just the keys
$keys = array_keys($c);
print_r($keys);

// flipped
$flipped = array_flip($a);

echo '<br />';

print_r('flipped ' . $flipped);

$numbers = range(1, 100);

var_dump($numbers);

$newNumbers = array_map(function ($number) {
    return "Number ${number}";
}, $numbers);

echo '<br />';

print_r($newNumbers);

echo '<br />';

$lessThan10 = array_filter($numbers, 
    fn($number) => $number <= 10);

print_r($lessThan10);

// $carry = previous iteration number
$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);

print_r($sum);

?>