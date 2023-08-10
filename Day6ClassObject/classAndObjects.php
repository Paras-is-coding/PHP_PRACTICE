<?php
class Books{
    var $price;
    var $title;
    
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

$physics = new Books;
$physics->setTitle("Paras Mukhi Physics");
$physics->setPrice("1 million dollars");
echo"The price of the book ".$physics->getTitle()." is ".$physics->getPrice().".";

?>