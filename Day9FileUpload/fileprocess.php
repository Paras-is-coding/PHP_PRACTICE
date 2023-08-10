<?php
$filename = $_FILES["profileimage"]["name"];
$type = $_FILES["profileimage"]["type"];
$size = $_FILES["profileimage"]["size"];

echo "Hello dear the name of your profileimage is ".$filename." it is of type ".$type." and it's size is ".$size;


?>