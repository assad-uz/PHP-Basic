<?php
class Student{
    private $id;
    private $name;
    private $batch;
    private static $student_list = "list.txt";

    function __construct ($_id,$_name,$_batch){
        $this->id = $_id;
        $this->name = $_name;
        $this->batch = $_batch;
    }
    function arrange(){
        return "ID: ".$this->id.", "."Name: ".$this->name.", "."Batch: ".$this->batch . PHP_EOL;
    }
    function save(){
        file_put_contents(self::$student_list, $this->arrange(),FILE_APPEND);
    }
    static function display_info(){
        $student_info = file(self::$student_list);
        echo "<b>Student ID | Student Name | Student Batch</b><br>";
        foreach($student_info as $students){
            list($id,$name,$batch) = explode(",", trim($students));
            echo "$id | $name | $batch <br>";
        }
    }
}
?>