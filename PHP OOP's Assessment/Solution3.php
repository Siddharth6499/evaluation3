<!-- In PHP, multiple heritance cannot be implemented but can be handled by using Interface -->


<?php
// Let's suppose we have 4 interfaces
Interface A{
    public function getFirstName();
}

Interface B{
    public function getLastName();
}

//Interface C extends A and B (Point of Multiple Inheritance)
Interface C extends A, B{
    public function getAge();
}

// Class D which implements interface C (All the methods defined in A and B interface would be available in class D)
class D implements C
{
    public function getFirstName()
    {
        echo "Siddharth";
    }

    public function getLastName()
    {
        echo "Srivastava";
    }

    public function getAge()
    {
        echo "21";
    }

}

//Creating Object of class D
$person = new D();
$person->getFirstName();
$person->getLastName();



?>