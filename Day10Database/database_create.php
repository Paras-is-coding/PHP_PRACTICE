<?php
require_once 'connection.php';

$sql = "create database php_lab";

if($conn->query($sql) == true){
    echo"Database created successfully";
}
else{
    die("Query error : ".$conn->error);
}
?>