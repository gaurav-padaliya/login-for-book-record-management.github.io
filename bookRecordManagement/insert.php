<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
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


    <table>
    <form action="insertion.php" method="post">
    <tr>
    <td>name :</td>
    <td><input type="text" name="name1" placeholder="enter your name"></td>
    </tr>
    <tr>
    <td>bookid :</td>
    <td><input type="number" name="bookid1" placeholder="bookid"></td>
    </tr>
    <tr>
    <td>title :</td>
    <td><input type="text" name="title1" placeholder="title"></td>
    </tr>
    <tr>
    <td>price :</td>
    <td><input type="number" name="price1" placeholder="price"></td>
    </tr>
    <tr>
    <td><input type="submit" value="insert" ></td>
    </tr>
   
    </form>
    </table>
</body>
</html>