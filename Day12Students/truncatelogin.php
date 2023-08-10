<?php
require_once 'database_connection.php';

$sql = "truncate table login";

if($conn->query($sql)=== true){
    header("location:select_login.php?success=Table truncated successfully!");
    exit();
  }
  else{
      echo "Error updating record:".$conn->error;
  }
?>
