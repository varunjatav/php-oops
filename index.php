<?php 

class Dog {
    public $name;
    public $breed;

   

    function bark(){
        echo "BARK BARK!!! <br>";
    }

    function printName (){
        echo "Name of the dog is ". $this->name ."<br>";
    }

    function printBreed(){
        echo "Breed of this dog is ". $this->breed ."<br>";
    }
}

// Creating objects from the Dog class
$dog1 = new Dog();
$dog2 = new Dog();

// Setting property values
$dog1->name = "Buddy";
$dog1->breed = "Labrador";

$dog2->name = "Max";
$dog2->breed = "Golden Retriever";

$dog1->bark();
$dog2->bark();

$dog1->printName();
$dog1->printBreed();

$dog2->printName();
$dog2->printBreed();
?>