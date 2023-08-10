<?php
session_start();
if(isset($_SESSION['id'])){
    header('Location:select_data.php');
    exit();
}
require_once'database_connection.php';
if(isset($_POST['email'])){
    $email=$_POST['email'];
    $password=md5( $_POST['password']);

    $sql="select * from login where email='$email' and password='$password'";

$result = $conn->query($sql);
if($result->num_rows>0){
    $row = $result->fetch_assoc();
    $_SESSION['id'] = $row['id'];
    $_SESSION['username'] = $row['username'];
     //echo"New record created sucessfully";
     header("location:select_data.php?select=Record added sucessfully");
      exit();
}
    
   else{
    echo"Error:".$sql."<br>".$conn->error;
    echo 'Invalid username or password!';
}
}

?>

<form action="" method="POST">
 Enter your email address: <br> <input type="email" value="" name="email"><br>
 Enter your password:  <br> <input type="password" value="" name="password"><br>
 <button>LOGIN</button>
</form>