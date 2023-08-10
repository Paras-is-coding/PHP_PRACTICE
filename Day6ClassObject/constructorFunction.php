<?php
class Books{
    var $price;
    var $title;

    function  __construct($pri,$tit){
        $this->price = $pri;
        $this->title = $tit;
    }
    
    function setPrice($pri){
        $this->price = $pri;
    }
    function getPrice(){
        return $this->price;
    }
    function setTitle($tit){
        $this->title = $tit;
    }
    function getTitle(){
        return $this->title;
    }
}

$physics = new Books("","");
$physics->setTitle("Paras Mukhi Physics");
$physics->setPrice("1 million dollars");
echo"The price of the book ".$physics->getTitle()." is ".$physics->getPrice().".";

// now we can  directly set price and title of the book while creating the object as : 
$maths = new Books("8 grans","Mathematics II");
echo"<br>The price of the book ".$maths->getTitle()." is ".$maths->getPrice().".";


?>