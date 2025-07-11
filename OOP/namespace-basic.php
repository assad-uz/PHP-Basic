<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
namespace AddStdClass;

class Student {
    public $name;
    function show() {
        echo "This is a student";
    }
}

// অবজেক্ট তৈরি (namespace সহ)
$student = new Student();
$student->show();
?>
</body>
</html>