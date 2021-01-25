<?php
session_start();
//connecting form databases
$con=mysqli_connect('localhost','root');
//select databases
mysqli_select_db($con , 'db1');
//query
$q = "select * from book";
$result = mysqli_query($con , $q);
$num = mysqli_num_rows($result);
mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view page</title>
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
<table border ="2px solid black">
<tr class="nevbar">
<td>name</td>
<td>bookid</td>
<td>title</td>
<td>price</td>
</tr>
<?php
for ($i=1; $i <= $num; $i++) { 
    $row = mysqli_fetch_assoc($result);
?>
<tr>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['bookid'];?></td>
<td><?php echo $row['title'];?></td>
<td><?php echo $row['price'];?></td>
</tr>
<?php
}
?>
</table>

</body>
</html>