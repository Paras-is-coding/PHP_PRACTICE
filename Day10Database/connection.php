<?php
$host = "localhost";
$username = "root";
$password = "";

//database queries
$databasename = "php_lab";

$conn = new mysqli($host,$username,$password,$databasename);

if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
}
else{
    echo"Connection successful";
}
?>
