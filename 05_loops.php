<?php

for ($i = 0; $i < 10; $i++) {
    echo $i . '<br/>';
}

$x = 1;
do {
    echo 'Number ' . $x . '<br/>';
    $x++;
} while ($x < 10);

$posts = [
    'First post',
    'Second post',
    'Third post',
    'Fourth post',
    'Fifth post'
];

foreach ($posts as $index => $post) {
    echo $index . '-' . $post . '' . '<br/>';
}


$persons = [
    'first_name' => 'Brad',
    'last_name' => 'Traversy',
    'email' => 'brad@grav.com'
];

foreach ($persons as $key => $value) {
    echo $key . '-' . $value . '<br/>';
}

?>