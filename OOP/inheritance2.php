<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class A {
    public $name;

    function __construct($name) {
        echo "This is <br>" . ($this->name = $name) . "<br>";
    }

    function __destruct() {
        echo "End<br>";
    }

    function Show() {
        echo "Show Method: This is my parent<br>";
    }

    function info() {
        echo "info Method: This is my parent<br>";
    }
}

// Child class B extends A
class B extends A {

    // Override Show method
    function Show() {
        echo "Show Method: This is my child<br>";
    }

    // New method only in child
    function details() {
        echo "This is a child class method<br>";
    }
}

// Create object of B
$obj = new B("Assaduzzaman");

// Call parent and child methods
$obj->Show();      // overridden
$obj->info();      // inherited from A
$obj->details();   // only in B
?>
</body>
</html>