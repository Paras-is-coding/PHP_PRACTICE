<?php
$host = "localhost";
$username = "root";
$password = "";

//database queries
$databasename = "big_on_library";

$conn = new mysqli($host,$username,$password,$databasename);

if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
}
else{
    echo"Connection successful";
}
?>
