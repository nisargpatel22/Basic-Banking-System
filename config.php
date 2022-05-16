<?php 

$server="localhost";
$username="root";
$password="";
$db="basic_bank";

$conn=mysqli_connect($server,$username,$password,$db);

if($conn){
  
}

else
    die("Failed to connect to the database  " .mysqli_connect_error()); //connection not establised
    
?>
