<?php 
$name = "localhost";
$username = "root";
$password = "";
$databasename = "students info";

$conn = new mysqli($name,$username,$password,$databasename);

if($conn->connect_error){
    die("Connection error!".$conn->connect_error);
}
else{
    echo("Connection Successful!");
}

?>