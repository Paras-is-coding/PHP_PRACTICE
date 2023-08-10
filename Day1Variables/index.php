<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>html_PHP document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sigmar&display=swap" rel="stylesheet">
   <style>
    .php-class{
        width:100vw;
        height:100px;
        display:flex;
        justify-content:center;
        align-iteam:center;
        font-family: 'Sigmar', cursive;;
        font-size:2em;
        font-weight:bolder:
    }
    .dnone{
        display:none;
    }
   </style>
</head>
<body>


<div id="a" class="php-class"><?php

$name = "Paras Chand";
$age = 21;
$incage = 1;
echo"Your Name is ",$name;
echo'<br>';
echo"Your age is $age + $incage = ",$age + $incage;


?></div>

<script>
    
    let timerID = setInterval(() => {
        let detalis = document.getElementById("a");
        detalis.classList.toggle("dnone");
    },400);
    </script>
</body>
</html>
