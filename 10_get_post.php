<?php

// get data from url
if (isset($_POST['submit'])) {
    echo $_POST['name'];
    echo '  ';
    echo $_POST['age'];
}

?>

<a href="<?php echo $_SERVER['PHP_SELF'];?>
?name=Brad&age=30">
Click
</a>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <div>
        <label for="name" class="control-label">Name: </label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age" class="control-label">Age: </label>
        <input type="number" name="age">
    </div>

    <input type="submit" value="Submit" name="submit">
</form>