<?php
// Non-static Example (অবজেক্ট দিয়ে কাজ)

class Student {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function sayHello() {
        echo "Hello, my name is $this->name<br/>";
    }
}

$student1 = new Student("Rakib");
$student2 = new Student("Sakib");

$student1->sayHello();  // Output: Hello, my name is Rakib
$student2->sayHello();  // Output: Hello, my name is Sakib

?>
/*
ব্যাখ্যা:
এখানে প্রতিটা student এর জন্য আলাদা আলাদা অবজেক্ট তৈরি হচ্ছে।

তাই $this->name আলাদা আলাদা নাম ধরে রাখতে পারছে।

এখানে আমরা new Student() দিয়ে অবজেক্ট বানাচ্ছি।

আমরা $this ব্যবহার করতে পারছি, কারণ এটা অবজেক্টের context।
*/