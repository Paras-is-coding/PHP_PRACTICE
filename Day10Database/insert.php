<?php
require_once 'connection.php';


$sql = "insert into student(name,email,rollno,address,program,phone)
values('paras','paraschand5815@gmail.com',25,'BDM-7','Bsc.CSIT','9848857862')";

if($conn->query($sql) == true){
    echo"Students record inserted successfully";
}
else{
    echo"Query error : ".$conn->error;
}
?>