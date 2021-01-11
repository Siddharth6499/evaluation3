<!-- DEPENDENCY INJECTION -->

<!-- Dependency injection is an approach that allows avoiding hard-coding dependencies and makes it possible to change the dependencies both 
at runtime and compile time. /-->

<!-- There can be 2 injection -->

<!-- 1 - Constructor Injection 
     2 - Setter Injection-->

<!-- Sample Code for constructor injection-->
<?php
class Test
{
    private $skills;
    public function __construct($skills)
    {
        $this->skills = $skills;
    }

    public function totalSkills()
    {
        return count($this->skills);
    }
}

// Creating object of class Test
$skills = array("Django", "Python", "PHP", "Symfony");
$obj = new Test($skills);
echo $obj->totalSkills();
?>


<!-- ------------------------------------------------ -->



<!-- Sample Code for Setter injection -->
<?php
class Test
{
    private $skills;

    // Setter function
    public function setSkill($skills)
    {
        $this->skills = $skills;
    }

}

// Creating object of class Test
$obj = new Test();
$skills = array("Django", "Python", "PHP", "Symfony");
$obj->setSkill($skills);
?>