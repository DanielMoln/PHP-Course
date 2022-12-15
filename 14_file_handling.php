<?php

$file = './files/users.txt';

if (file_exists($file)) {
    // echo readfile($file);
    // handler = pointer which point
    // to the file
    $handle = fopen($file, 'r');
    $contents = fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
} else {
    $handle = fopen($file, 'w');
    // PHP_EOL = linebreak
    $contents = 'Brad' . PHP_EOL . 'Sara' . PHP_EOL . 'Mike';
    fwrite($handle, $contents);
    fclose($handle);
}

?>