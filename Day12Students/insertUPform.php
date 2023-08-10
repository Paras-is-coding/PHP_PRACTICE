<?php
require_once 'database_connection.php';

if(isset($_POST['email'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "insert into login(email,password)
    values('$email','$password')";

    if($conn->query($sql) === true){
        echo'record inserted successfully!';
    }
    else{
        echo"Error inserting data in table".$conn->error;
    }
}

?>

<form name="regform" method="post" action="">
    <label for="email">Email:</label><input type="email" name="email" id="email"><br>
    <label for="password">Password:</label><input type="password" name="password" id="password"><br>
    <input type="submit" name="submit" value="SUBMIT">
</form>