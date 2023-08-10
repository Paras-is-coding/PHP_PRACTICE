<?php


$foods = array("Chicken","Rice","Pasta","MOMO");

echo"The original indexed array is : ";
foreach($foods as $food){
    echo $food." ";
}
echo "<br><br>";


echo "Sorting the indexed array in ascending order : ";
sort($foods);                                   //the sortfunction
foreach($foods as $food){
    echo $food." ";
}
echo "<br><br>";

echo "Sorting the indexed array in decending order : ";
rsort($foods);                                 //the rsort function
foreach($foods as $food){
    echo $food." ";
}
echo "<br><br>";


$favfoods = array("paras" =>"Chicken","aman"=>"Rice","nabin"=>"Pasta","biru"=>"MOMO");

echo"The original associative array is : ";
foreach($favfoods as $person=>$favfood){
    echo $person."-".$favfood." ";
}
echo "<br><br>";

asort($favfoods);                           // the asort function
echo"The associative array after sorting by values using asort function is : ";
foreach($favfoods as $person=>$favfood){
    echo $person."-".$favfood." ";
}
echo "<br><br>";

ksort($favfoods);                           // the ksort function
echo"The associative array after sorting by key using ksort function is : ";
foreach($favfoods as $person=>$favfood){
    echo $person."-".$favfood." ";
}
echo "<br><br>";


arsort($favfoods);                           // the arsort function
echo"The associative array after sorting in descending order by key using ksort function is : ";
foreach($favfoods as $person=>$favfood){
    echo $person."-".$favfood." ";
}
echo "<br><br>";


krsort($favfoods);                           // the krsort function
echo"The associative array after sorting in descending order by key using ksort function is : ";
foreach($favfoods as $person=>$favfood){
    echo $person."-".$favfood." ";
}
echo "<br><br>";



?>