<?php

$string = 'Hello world!';

// string length
echo strlen($string);

// 'o' first position in the string
echo strpos($string, 'o');

// o 'last' position in the string
echo strrpos($string, 'o');

// reverse string
echo strrev($string);

// convert all characters to lower case
echo strtolower($string);

// convert all characters to uppercase
echo strtoupper($string);

// uppercase the first character of each word
echo ucwords($string);

// string replace
echo str_replace('World', 'Everyone', $string);

// return portion of string specified by the offset
// and length
echo substr($string, 0, 5);
echo substr($string, 5);

// like react purify (html content)
$asd = '<script>alert("kecske")</script>';
echo htmlspecialchars($asd);

printf('%s likes %s', 'Brad', 'Emma Watson');
printf('1+1=%d', 1 + 1);

// starts with
if (str_starts_with($string, 'Hello')) {
    echo 'YES';
}

// ends with
if (str_ends_with($string, 'Everyone')) {
    echo 'YES';
}



?>