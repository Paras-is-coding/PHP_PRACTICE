<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>title</title>
</head>
<body>
    <?php
    echo "We are testing file inclusion using include method..................";
    require 'header.php';

    echo"Testing multiple include........................";
    require_once  'header.php';

    echo"Testing error...............................";
     require 'head.php';
    echo"This line is after the require  error...................";
    ?>

</body>
</html>