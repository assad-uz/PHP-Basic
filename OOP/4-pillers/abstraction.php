<?php
// Abstract Class
abstract class Animal {
    public $name;

    // public function __construct($name) {
    //     $this->name = $name;
    // }

    // Abstract Method
    abstract public function makeSound();

    public function greet() {
        echo "Hello, I am a " . $this->name . "<br>";
    }
}

// Concrete Class (inheriting Animal)
class Dog extends Animal {
    public function makeSound() {
        echo "Woof! Woof!<br>";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "Meow!<br>";
    }
}

// $a = new Animal("Any"); ❌ Error: abstract class can't be instantiated

$dog = new Dog("Dog");
$dog->greet();       // Hello, I am a Dog
$dog->makeSound();   // Woof! Woof!

$cat = new Cat("Cat");
$cat->greet();       // Hello, I am a Cat
$cat->makeSound();   // Meow!
?>
