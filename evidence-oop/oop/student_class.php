<?php
class Student
{
    //------set property of the class (public or private)------//
    private $id;
    private $name;

    private static $file_path = "data.txt";

    //---------------constructor---------------//
    function __construct($_id, $_name)
    {
        $this->id = $_id;
        $this->name = $_name;
    }

    //-----------structure how to save-----------------//
    public function arrange()
    {
        return $this->id . " , " . $this->name . PHP_EOL;
    }

    //-----------save function-----------------//
    public function store()
    {
        file_put_contents(self::$file_path, $this->arrange(), FILE_APPEND);
    }

    //---------------display_students-------------//
    public static function display_students()
    {

        $students = file(self::$file_path);

        echo "<b>ID | Name</b><br/>";
        foreach ($students as $dfg) {
            list($id, $name) = explode(",", trim($dfg));
            echo "$id | $name<br/>";
        }
    }
}
/*
(টেবিল আকারে দেখাতে):
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Name</th></tr>";

foreach ($students as $line) {
    list($id, $name) = explode(",", trim($line));
    echo "<tr><td>$id</td><td>$name</td></tr>";
}

echo "</table>";
*/