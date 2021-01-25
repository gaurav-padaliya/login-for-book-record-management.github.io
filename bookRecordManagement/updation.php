<?php
session_start();
//connected through databses
$con = mysqli_connect('127.0.0.1','root','','db1');
//select databases
 mysqli_select_db($con , 'db1');
//select update query 
$q = "select * from book";
$result =mysqli_query($con , $q);
$num = mysqli_num_rows($result);

mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>updating php</title>
    <link rel="stylesheet" href="style.css">
    <style>
    #color{
        background-color: gray ;
    }
    </style>
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
if($con){
    if($result)
    echo "connection stablished <BR>";
    else
    echo "connection failier ".mysqli_error($con);
    }
else
    echo "connection falier".mysqli_error($con);
    ?>
<tr> 
    <td><input type="text" name="searchbox" placeholder = "search by bookid"></td>
</tr>
<form action="updated.php" method="post">
<br><br>
<table border = "1px solid gray">
<tr id="color">
<td>name</td>
<td>bookid</td>
<td>title</td>
<td>price</td>
</tr>
<?php
for ($i=1; $i <=$num; $i++) { 
    $row =mysqli_fetch_assoc($result);
    ?>
<tr>
<td><input type="text" name="name<?php echo $i;?>" value="<?php echo $row['name'];?>"></td>
<td ><?php echo $row['bookid'];?></td>
<td><input type="text" name="title<?php echo $i;?>" value="<?php echo $row['title'];?>"></td>
<td><input type="text" name="price<?php echo $i;?>" value="<?php echo $row['price'];?>"></td>
</tr>
<?php
}
?>
</table>
<input type="submit" value="update">
</form>
    
</body>
</html>