<?php
require_once 'connection.php';

$name = $_POST["username"];
$email = $_POST["email"];
$rollno = $_POST["rollno"];
$address = $_POST["address"];
$program = $_POST["program"];
$phone = $_POST["phone"];


$sql = "insert into student(name,email,rollno,address,program,phone)
values($name,$email,$rollno,$address,$program,$phone)";

if($conn->query($sql) == true){
    echo"Students record inserted successfully";
}
else{
    echo"Query error : ".$conn->error;
}
?>