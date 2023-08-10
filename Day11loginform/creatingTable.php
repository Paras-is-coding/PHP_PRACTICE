<?php
require_once 'connection.php';

$sql = "create table student 
(id int(6) unsigned auto_increment primary key,
name varchar(60) not null,
email varchar(70) not null,
rollno int(8) not null,
address varchar(80) not null,
program varchar(50) not null,
phone varchar(13) not null);";

if($conn->query($sql)==true){
    echo"student table is created successfully!";
}
else{
    echo"Query error : ".$conn->error;
}
?>