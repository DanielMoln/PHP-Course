<?php
$age = 20;

if ($age >= 18) {
    echo 'He is an adult!';
} else {
    echo 'He is a child!';
}

echo '<br />';
echo '<br />';
echo '<br />';

$t = date('H');
echo $t;

if ($t < 12) {
    echo 'Good Morning!';
} else if ($t > 12 && $t < 17) {
    echo 'Good afternoon!';
} else {
    echo 'Good evening!';
}

if (true) {
    echo 123;
}

$posts = ['First Post'];

if (!empty($posts)) {
    var_dump($posts);
} else {
    echo 'No posts found!';
}

echo '<br />';  

echo !empty($posts) ? $posts[0] : '';

echo '<br />';

$firstpost = $posts[9] ?? null;

echo $firstpost;

echo '<br />';

$favcolor = 'blue';

switch ($favcolor) {
    case 'red':
        echo 'Your favourite color is red!';
        break;
    case 'blue':
        echo 'Your favourite color is blue!';
        break;
    case 'yellow':
        echo 'Your favourite color is yellow!';
        break;
}

?>