<?php
//Creating an interface A
Interface A
{
    //Creating 2 methods
    public function getName();
    public function getAge();
}

//Class B implementing the methods
abstract class B implements A
{
    public function getName()
    {
        echo "My Name is Siddharth.<br>";
    }
}

//Creating object 
$person = new B();
$person->getName();
$person->getAge();


?>