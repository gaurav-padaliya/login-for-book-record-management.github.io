<?php
session_start();
//connecting to database
$con = mysqli_connect('localhost','root','','db1');
//selecting database
mysqli_select_db($con ,'db1');
//fatch data from array which we want to delete 
$size = sizeof($_POST);
$j=1;
for($i=1 ;$i<= $size ;$i++,$j++){
    $index = 'b'.$j;
    if(isset($_POST[$index]))
    $check[$i] =$_POST[$index];
    else
    $i--;
}
//query
for($k=1 ;$k<= $size ;$k++){
    
    //mysqli_fetch_assoc($check);
    $q ="delete from book where book.bookid=$check[$k]";
    // echo $check[$k];
    $result = mysqli_query($con,$q);
    if($result)
    echo "query run successfully";
    else
    echo "error occer ".mysqli_error($con);
}
mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete page</title>
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


<a href="view.php">click here</a> to view result
    
</body>
</html>