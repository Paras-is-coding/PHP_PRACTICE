<?php
$results = array(
    "Shailu"=> array("Grammar"=>33,"Gk"=>20,"Result"=>"Failed!"),
    "Paras"=> array("Grammar"=>88,"Gk"=>90,"Result"=>"Pass!"),
    "Govind"=> array("Grammar"=>50,"Gk"=>60,"Result"=>"Pass!")
);


// //accessing 
// echo "The result of Govind is ".$results["Govind"]["Result"].'<br>';

// //we can also loop through a 
// foreach($results as $key=>$value){
//     echo $key.' : ';
//     // echo implode(" ",$value).'&nbsp;';//implode function converts a array into string

//     foreach($value as $key2=>$value2){
//         echo $key2.' - '.$value2.' ';
//     }
//     echo '<br>';


// }



//Displaying the data of the array  in table 
echo"<table border='2px solid black'>
<tr>
<th>Name</th>";
$onearr = $results["Shailu"];

    foreach($onearr as $subject=>$marks){
        echo"<th>$subject</th>";
    }
echo"</tr>";


foreach($results as $name=>$array){
    echo"<tr><td>$name</td>";
    foreach($array as $subject=>$marks){
        echo "<td>$marks</td>";
    }
    echo"</tr>";
}





?>