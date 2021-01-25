<?php
// start_session();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form </title>
    <link rel="stylesheet" href="loginCss.css">
</head>
<body>
<table>
<h3>login form</h3>
<form action="validation.php" method="post">
<tr>
<td><input type="text" name="username" placeholder ="username"></td>
</tr>
<tr>
<td><input type="password" name="password" placeholder = "password"></td>
</tr>
<td><input type="submit" value="login"></td>
</form>
</table>
    
</body>
</html>