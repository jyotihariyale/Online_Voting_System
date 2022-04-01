<?php 

$serverName ="localhost:3307";
$userName ="root";
$password ="";
$dbname ="jyoti";

$connect = mysqli_connect($serverName, $userName,$password,$dbname) or die("connection fail");
?>