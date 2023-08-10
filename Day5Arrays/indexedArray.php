<?php
$names = array('Ram','Shyam','Hari','Paras');

//access iteams using index
echo'The first name is '.$names[0].'<br>';

//access array all iteams using foreach loop
foreach($names as $name){
    echo $name."&nbsp;";
}
?>