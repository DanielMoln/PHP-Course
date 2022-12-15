<?php
session_start();

    if (isset($_POST['submit'])) {
        $username = filter_input(INPUT_POST, 'username', 
                FILTER_SANITIZE_SPECIAL_CHARS);
        $password = $_POST['password'];

        if ($username == 'john' 
        && $password == 'password') {
        echo 'success';
            $_SESSION['username'] = $username;
            header('Location: ./php-crash/extras/dashboard.php');
        } else {
            echo 'Incorrect login!';
        }
    }

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <div>
        <label for="username" class="control-label">Name: </label>
        <input type="text" name="username">
    </div>
    <div>
        <label for="password" class="control-label">Age: </label>
        <input type="text" name="password">
    </div>

    <input type="submit" value="Submit" name="submit">
</form>