<?php
$paras = array("Maths"=>99,"PHP"=>100,"Result"=>"Pass!");

//access
echo 'Paras you are '. $paras['Result'];

// we can also loop through associative array as follows
foreach($paras as $key=>$value){
    echo $key;
}
?>