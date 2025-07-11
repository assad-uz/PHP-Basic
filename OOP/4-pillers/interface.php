<?php
// Interface
interface Animal {
    public function makeSound();  // No body
    public function eat();        // No body
}

// Class implements interface
class Dog implements Animal {
    public function makeSound() {
        echo "Dog says: Woof!<br>";
    }

    public function eat() {
        echo "Dog is eating.<br>";
    }
}

// আরেকটি class
class Cat implements Animal {
    public function makeSound() {
        echo "Cat says: Meow!<br>";
    }

    public function eat() {
        echo "Cat is eating.<br>";
    }
}

// Object তৈরি
$dog = new Dog();
$dog->makeSound();
$dog->eat();

$cat = new Cat();
$cat->makeSound();
$cat->eat();
?>
