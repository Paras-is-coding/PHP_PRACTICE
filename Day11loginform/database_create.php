<?php
require_once 'connection.php';

$sql = "create database big_on_library";

if($conn->query($sql) == true){
    echo"Database created successfully";
}
else{
    die("Query error : ".$conn->error);
}
?>