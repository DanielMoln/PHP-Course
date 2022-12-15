<?php

// get data from url
if (isset($_POST['submit'])) {
    // if the forms method is POST then use
    // INPUT_POST if it is get then INPUT_GET
    $name = filter_input(INPUT_POST, 'name', 
                FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, 'age', 
                FILTER_SANITIZE_SPECIAL_CHARS);
    echo "${name} - ${age}";

    /*$filteredVariable = filter_var(
        $_POST['name'],
    FILTER_SANITIZE_SPECIAL_CHARS
    );*/
}

?>

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