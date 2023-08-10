<?php
class Books{
    var $price;
    var $title;
    
    public function setPrice($pri){
        $this->price = $pri;
    }
    public function getPrice(){
        return $this->price;
    }
    public function setTitle($tit){
        $this->title = $tit;
    }
    public function getTitle(){
        return $this->title;
    }
}

//class Physics inherits all the functions and properties of class Books
class Physics extends Books{
    var $author;
    function setAuhor($aut){
        $this->author = $aut;
    }
    function getAuthor(){
        return $this->author;
    }
}


//making object of Physics class and accessing methods of Books as well as Physics class
$obj = new Physics;
$obj->setPrice("3k");
$obj->setTitle("Her Eyes");
$obj->setAuhor("Paras");

echo "The Book ".$obj->getTitle()." is written by ".$obj->getAuthor()." and its price is ".$obj->getPrice().".";
?>