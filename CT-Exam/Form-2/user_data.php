<?php
class Student{
    private $id;
    private $name;
    private $email;
    private static $list_path = 'list.txt';

    function __construct($_id,$_name,$_email,){
        $this->id = $_id;
        $this->name = $_name;
        $this->email = $_email;
    }
    function show_arrange(){
        return 'ID: '.$this->id.', '.'Name: '.$this->name.', '.'E-mail: '.$this->email.PHP_EOL;
    }
    function save(){
        file_put_contents(self::$list_path,$this->show_arrange(),FILE_APPEND);
    }
    static function display_browser(){
        $students_info = file(self::$list_path);
        echo "<b><br>ID | Name | E-mail</br><br>";
        foreach($students_info as $student){
           list($id,$name,$email) = explode(",",trim($student));
           echo "$id | $name | $email<br>";
        }
    }

}

?>
