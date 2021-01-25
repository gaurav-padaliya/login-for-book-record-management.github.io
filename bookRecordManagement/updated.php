<?php
session_start();
//connected through databses
$con = mysqli_connect('127.0.0.1','root','','db1');
//select databases
 mysqli_select_db($con , 'db1');
 //query to update
 $size = sizeof($_POST);
$res = $size/3;

$q1="select * from book";
$result = mysqli_query($con,$q1);
for($i=1; $i <= $res; $i++) { 
    $a = mysqli_fetch_assoc($result);
    $bookid = $a['bookid']; 
    $index1 = "name".$i;  
    $name = $_POST[$index1];
    $index2 = "title".$i;  
    $title = $_POST[$index2];
    $index3 = "price".$i;  
    $price = $_POST[$index3];
    if(isset($bookid))
    $q = "update book set name = '$name' , title = '$title' , price = '$price' where bookid = '$bookid' ";
    // echo $q;
   $r = mysqli_query($con,$q);
//    if($r)
//    echo "successful";
//    else
//    echo "error".mysqli_error($con);
}
mysqli_close($con)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>updated form </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
        <nav class="nevbar">
            <ul>
                <li><a href="view.php">view</a></li>
                <li><a href="deletion.php">delete</a></li>
                <li><a href="insert.php">insert</a></li>
                <li><a href="updationphp">update </a></li>
                <li><a href="http://localhost/app/logindb/logout.php">logout </a></li>
                <div class="search">
                    <span id="a1">search :</span><input type="text" name="search" id="search" placeholder="search for your webpage ">
                </div>
            </ul>
        </nav>
    </header>



<?php
// echo var_dump($_POST);
// echo "<br>".$index1;
?>
<h3>form is updated</h3>
<?php
//}
?>
    
</body>
</html>