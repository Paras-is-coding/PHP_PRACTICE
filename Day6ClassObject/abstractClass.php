<?php
abstract class Example{
    public function hello(){
        echo"Hello World!";
    }
}

//tryna create the object of abstract class will throw the error so the statements below will throw
// an error
$obj = new Example;
$obj->hello();

// mostly abstract classes are created for inheritence purpose

?>


