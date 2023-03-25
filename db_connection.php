<?php 

$hostname = "127.0.0.1";
$username = "root"; 
$password = ""; 
$dbname = "be18_cr4_jaimecoca_biglibrary";


$connect = new mysqli($hostname, $username, $password, $dbname);


if($connect->connect_error) {
   die("Connection failed: " . $connect->connect_error);
};
