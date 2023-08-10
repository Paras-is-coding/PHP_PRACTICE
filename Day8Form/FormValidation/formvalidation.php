<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form validation</title>
    <style>
        .error{
            margin-left:1rem;
            color:red;

        }
        input{
            height:2rem;
            margin:.5rem;
        }
    </style>
</head>
<body>
    
<?php
$firstnameerr = $emailerr = $phoneerr =$gendererr= "";
$firstname = $lastname = $email = $phone=$gender= "";
if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty($_POST["firstname"])){
        $firstnameerr = "* firstname can't be empty!";
    }
    else{
        $firstname = test_input($_POST["firstname"]);
    }
    if(empty($_POST["lastname"])){
        $lastname = "";
    }
    else{
        $lastname = test_input($_POST["lastname"]);
    }

    if(empty($_POST["email"])){
        $emailerr = "* email can't be empty!";
    }
    else{
        $email = test_input($_POST["email"]);
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $emailerr = "* invalid email format";
        }
    }

    if(empty($_POST["phone"])){
        $phoneerr = "* phone can't be empty!";
    }
    else{
       $phone =  test_input($_POST["phone"]);
    }
    if(empty($_POST["gender"])){
        $gendererr= "* gender can't be empty!";
    }
    else{
       $gender =  test_input($_POST["gender"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }



?>

    <form name="registration" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Firstname : <input type="text" name="firstname"><span class="error"><?php echo $firstnameerr;?></span><br>
        

        Lastname : <input type="text" name="lastname"><br>
        Email : <input type="email" name="email"><span class="error"><?php echo $emailerr;?></span><br>
        Phone : <input type="number" name="phone"><span class="error"><?php echo $phoneerr;?></span><br>

        Gender :         
        <input type="radio" id="male" name="gender"  value="male">
        <label for="male">Male</label>     
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><span class="error"><?php echo $gendererr;?></span><br>

        <input type="submit" name="submit" value="submit">

    </form>
<?php
  
  echo "<h2>Your Input:</h2>";
  echo $firstname;
  echo $lastname;
  echo "<br>";
  echo $email;
  echo "<br>";
  echo $phone;
  echo"<br>";
  echo $gender;
  
  
?>
</body>
</html>