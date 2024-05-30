<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "bookstore";
$conn = new PDO("mysql:host=$host;dbname=$db",$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// if($conn)
// {
//     echo "Connected";
// }
// else
// {
//     die("Not Connected");
// }

// $conn =mysqli_connect($host,$username,$password,$db);
// if($conn)
// {
//     echo "Connected";
// }
// else
// {
//     die("Not Connected");
// }


/* or we can use pdo to connect  database in more secure way and with so many advantages in pdo*/ 



?>