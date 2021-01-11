<!-- Method Chaining :
When more than one methods are called in a single line rather than calling individual methods, then it is called method chaining -->

<!-- ------------------------------------------------------------------------------------------ -->

<!-- Suppose we have a class Person -->
<?php
class person{
    // Defining Variables
    public $name = "";
    public $age = "";

    //defining methods
    public function setName($name="")
    {
        $this->name = $name;
        return $this;
    }

    public function setAge($age="")
    {
        $this->age = $age;
        return $this;
    }

    //To show to output of the input values(We will define a method -> show)
    public function show()
    {
        echo "Hello " . $this->name . "! Your age is " . $this->age . " years.";

    }
}

//Creating an object of class Person 

// Normal object calling
$person = new person();
$person->setName("Siddharth");
$person->setAge("21");
$person->show();
echo "<br>";

//Use of Method Chaining
$person = new person();
$person->setName("Siddharth")->setAge("21")->show();
?>