<?php 
session_start();
$name =$_POST['name1'];
$bookid =$_POST['bookid1'];
$title =$_POST['title1'];
$price =$_POST['price1'];
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'db1');
$query = "insert into book( name, bookid , title, price) values ('$name','$bookid', '$title','$price')";
$i = mysqli_query( $con , $query );
mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
        <nav class="nevbar">
            <ul>
                <li><a href="view.php">view</a></li>
                <li><a href="deletion.php">delete</a></li>
                <li><a href="insert.php">insert</a></li>
                <li><a href="updation.php">update </a></li>
                <li><a href="http://localhost/app/logindb/logout.php">logout </a></li>
                <div class="search">
                    <span id="a1">search :</span><input type="text" name="search" id="search" placeholder="search for your webpage ">
                </div>
            </ul>
        </nav>
    </header>


<?php
//check connection
if($con)
echo "connected";
else
die('Not connected : '.mysqli_error());
echo "<br>";
//query successfully run or not
if($i)
echo "the connection was sussessful";//to  check
else
echo "no connection";
?>
<h3>data is successfully inserted
<!-- <?php echo var_dump($con);?> -->
</h3>
<a href="insert.php">click here</a>To insert more record<br>
<h1><?php echo var_dump($_POST);?></h1>
</body>
</html>