<?php

if (isset($_POST['submit'])) {
    $allowed_ext = array('png', 'jpg', 'jpeg', 'gif');

    if(!empty($_FILES['upload']['name'])) {
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp_name = $_FILES['upload']['tmp_name'];
        $target_dir = "./files/${file_name}";

        // Get file extension
        // logo.png explode('.' dot means where we want to split
        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));

        // Validate file extension
        if (in_array($file_ext, $allowed_ext)) {
            // 1 mb
            if ($file_size <= 1_000_000) {
                move_uploaded_file($file_tmp_name, $target_dir);
                $message = '<p style="color:gree;">File uploaded!
                </p>';
            } else {
                $message = '<p style="color:red;">Too large
                </p>';
            }
        } else {
            $message = '<p style="color:red;">Invalid file type
            </p>';
        }
    } else {
        $message = '<p style="color:red;">Please choose a file
        </p>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>

    <?php echo $message ?? null; ?>

    <form 
        action="<?php echo $_SERVER['PHP_SELF'] ?>" 
        method="post"
        enctype="multipart/form-data"
    >
        Select image to upload:
        <input type="file" name="upload">

        <input type="submit" name="submit">
    </form>
</body>
</html>