<?php
require_once 'database_connection.php';

if(isset($_POST['name'])){
    $name = $_POST['name'];
    $program = $_POST['program'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $rollno = $_POST['rollno'];

    $sql = "insert into student(name,program,email,address,rollno)
    values('$name','$program','$email','$address','$rollno')";

    if($conn->query($sql) === true){
        header("location:select_data.php?success=Record added successfully!");
        exit();
    }
    else{
        echo"Error inserting data in table".$conn->error;
    }
}

?>

<form name="regform" method="post" action="">
    <label for="name">Name: </label><input type="text" name="name" id="name"><br>
    <label for="program">Program:</label><input type="text" name="program" id="program"><br>
    <label for="email">Email:</label><input type="email" name="email" id="email"><br>
    <label for="address">Address:</label><input type="text" name="address" id="address"><br>
    <label for="rollno">RollNO:</label><input type="number" name="rollno" id="rollno"><br>
    <input type="submit" name="submit" value="SUBMIT">
</form>