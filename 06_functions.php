<?php

$y = 12;

function registerUser() {
    global $y;
    $x = 10;
    echo 'User registered! <br />';
}

function unregisterUser($email)
{
    echo 'Unregistered! ' . $email . '<br />';
}

function sum($n1 = 4, $n2 = 3) {
    return $n1 + $n2;
}

$subtract = function ($n1, $n2) {
    return $n1 - $n2;
};
$multiply = function ($n1, $n2) {
    return $n1 * $n2;
};
$dividing = function ($n1, $n2) {
    return $n1 / $n2;
};

$multiply2 = fn($n1, $n2) => $n1 * $n2;

echo '<br />';

echo sum(5, 5);

echo '<br />';

echo sum();

echo '<br />';


registerUser();

echo '<br />';

unregisterUser('test@email.com');

?>