<?php

// set cookie (86400 seconds = 1 day)
setcookie('name', 'Brad', time() + 864);

if (isset($_COOKIE['name'])) {
    echo "<h1>Hello " . $_COOKIE['name'] . "</h1>";
}

setcookie("name", '', time() - 86400);

?>