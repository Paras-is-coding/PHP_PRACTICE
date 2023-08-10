<?php
require_once 'database_connection.php';
if(isset($_SESSION['id'])){
    header('Location:login.php');
    exit();
}

if($id=$_GET['id']){
    $sql ="Delete from student WHERE id= $id";
    if($conn->query($sql)=== true){
        header("location:select_data.php?success=Record deleted sucessfully");
        exit();
      }
      else{
          echo "Error updating record:".$conn->error;
      }
    }

?>