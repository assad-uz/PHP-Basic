<?php
class Patient{
    private $name;
    private $sl;
    private $time;
    private static $list_path = 'list.txt';

    function __construct($_name,$_sl,$_time){
        $this->name = $_name;
        $this->sl = $_sl;
        $this->time = $_time;
    }
    function show_arrange(){
        return 'Patient Name: '.$this->name.', '.'Serial No: '.$this->sl.', '.'Visit-time: '.$this->time.PHP_EOL;
    }
    function save(){
        file_put_contents(self::$list_path,$this->show_arrange(),FILE_APPEND);
    }
    // New
    static function display_browser(){
        $patients_info = file(self::$list_path);
        echo "<b><br>Patient Name | Serial No. | Time</br><br>";
        foreach($patients_info as $patient){
           list($name,$sl,$time) = explode(",",trim($patient));
           echo "$name | $sl | $time <br>";
        }
    }

}

?>
