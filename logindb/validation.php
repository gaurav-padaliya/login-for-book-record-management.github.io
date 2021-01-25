<?php
$username = $_POST['username'];
$password = $_POST['password'];
$con =mysqli_connect('localhost','root','','logindb');
mysqli_select_db($con,'logindb');
$q = "select * from user where username='$username' && password ='$password'";
$result = mysqli_query($con , $q);
$num = mysqli_num_rows($result);
if($num){
    session_start();
    $_SESSION['username'] = $username;
    // echo "hello world";
    header('location:http://localhost/app/bookRecordManagement/insert.php');
}
else{
    header('location:http://localhost/app/logindb/logout.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hello world</title>
</head>
<body>
<?php
echo "hello gaurav".$q;
if($num)
?>
</body>
</html>