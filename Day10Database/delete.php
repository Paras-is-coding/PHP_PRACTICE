<?php
require_once 'connection.php';

$sql = "delete from student where id=3";

if($conn->query($sql) == true){
    echo"Students record deleted successfully!";
}
else{
    echo"Query error : ".$conn->error;
}
?>