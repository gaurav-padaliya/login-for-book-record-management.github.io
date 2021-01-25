<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logout paga</title>
</head>
<body>
    you are logout
    <?php
    if(!isset($_SESSION['username'])){
        echo "hello";
         header('localhost:login.php');
    if(!headers_sent()){
        header('localhost: https://www.educateinall.com');
    }
    echo " world";
}
    ?>
    <a href="login.php">click here</a>
</body>
</html>
