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
    echo "We are testing file inclusion using include method";
    include 'header.php';

    echo"Testing multiple include";
    include_once  'header.php';

    echo"Testing error";
    include 'head.php';
    echo"This line is after the inclusion error";
    ?>

</body>
</html>