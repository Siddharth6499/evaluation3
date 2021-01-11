TRAITS

<!-- Basically Traits are used to declare methods that can be used in multiple classes.
In simple words, by using traits a class can inherit multiple behaviours.-->

<?php
//Define a trait
trait A{
    //code
}

//To use trait in a class

class A{
    trait B;
}


//Below is the sample code for trait

//Defining trait
trait info{
    public function msg(){
        echo "Traits";
    }
}
//Using Trait in a class
class Test{
    use info;
}

//Creating object of class Test
$obj = new Test();

//Calling method within the trait
$obj->msg();
?>



<!-- ------------------------------------------------------------------------------------------------------------------------------- -->
NAMESPACES

<!-- In simple words, NameSpaces can be used to organize the classes by grouping them that works together to perform a task.
They also allow same name to be used for more than one class-->

<!-- Namespaces must be declared at the beginning of a file   (A Must) -->

<!--Sample code -->
<?php
// Declaring a namespace (Let's assume namespace for HTML)
namespace HTML;
    class Person
    {
        public $name = "";
        public $age = 0;
        public function message() {
            echo "<p> Hello I am '{$this->name}' and I am {$this->age} years old.</p>";
            }
    }
$person = new Person();
$person->name = "Siddharth";
$person->age = 21;
?>

<!-- Defining Boiler Plate for HTML -->
<!DOCTYPE html>
<html>
<body>

<?php
$table->message();
?>

</body>
</html>