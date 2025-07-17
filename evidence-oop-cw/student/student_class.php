<?php
class Student
{
    private $id;
    private $name;
    private $course;
    private $phone;

    private static $file_path = "data.txt";

    //---------------constructor---------------//
    function __construct($_id, $_name, $_course, $_phone)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->course = $_course;
        $this->phone = $_phone;
    }

    public function csv()
    {
        return $this->id . " , " . $this->name . " , " . $this->course ." , " . $this->phone . PHP_EOL;
    }

    //-----------save function-----------------//
    public function save()
    {
        file_put_contents(self::$file_path, $this->csv(), FILE_APPEND);
    }

    //---------------display_students-------------//
    public static function display_students()
    {

        $students = file(self::$file_path);

        echo "<b>ID | Name | Course | Phone</b><br/>";
        foreach ($students as $s) {
            list($id, $name, $course, $phone) = explode(",", trim($s));
            echo "$id | $name | $course | $phone <br/>";
        }
    }
}
