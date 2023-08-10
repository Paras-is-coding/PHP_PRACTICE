<?php
//program to print even numbers upto 10o 
echo "Using for loop the even numbers upto 100 are : ";
for($i=0; $i<100; $i++){
    if($i%2==0){
        
        echo $i.'&nbsp;';
    }
}

echo"<br>Using while loop the odd numbers upto 100 are : ";
$a = 0;
$b = 0;
while($a <= 100){
    if($a%2 != 0){
        $b++;
        echo $a.'&nbsp;';
        
    }
    $a++;
}
echo "<br>The number of odd numbers upto 100 are : ".$b;


?>