<?php
namespace AddStdClass;
class Student {
    public $name;
    function show() {
        echo "This is a student";
    }
}
?>

<?php
// নিচের অংশ অন্য ফাইলে বা অন্য namespace-এ হলে:
require 'student.php'; // যদি আলাদা ফাইলে থাকে
$obj = new \AddStdClass\Student(); // Global scope থেকে call
$obj->show();
?>
