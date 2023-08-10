<?php 
$hour = date("H");//'H' represents date in 24 hrs format
if($hour < 12){
    echo'Good morning everyone!';
}
else if($hour <16){
    echo"Good afternoon everyone!";
}
else if($hour<20){
    echo'Good evening everyone!';
}
else{
    echo"Good night everyone!";
}
?>