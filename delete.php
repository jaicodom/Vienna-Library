<?php

require_once ('db_connection.php');

$id = $_GET['id'];

$sqlSelect = "SELECT * FROM items WHERE id= $id";
$result = mysqli_query($connect, $sqlSelect);
$row = mysqli_fetch_assoc($result);

if(mysqli_query($connect, $sqlSelect )){

  unlink("images/$row[image]");

};

$sql = "DELETE FROM items WHERE id = $id ";

if(mysqli_query($connect, $sql)){
  
  header ('Location: index.php');


};



?>