<?php
require_once 'database_connection.php';

$sql = "create table student(
id int(6) unsigned auto_increment primary key,
name varchar(30) not null,
program varchar(30) not null,
email varchar(60) not null,
reg_data timestamp default current_timestamp on update current_timestamp,
address varchar(60),
rollno int(6) unsigned not null
)";

if($conn->query($sql)==true){
    echo("Table created Successfully!");
}
else{
    echo("Error in creating table".$conn->error);
}


?>
