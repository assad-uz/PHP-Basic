<?php
class Patient{
    private $name;
    private $sl;
    private $time;
    private static $pList = 'list.txt';

    function __construct($_name,$_sl,$_time){
        $this->name = $_name;
        $this->sl = $_sl;
        $this->time = $_time;
    }
    function show(){
        return 'Patient Name: '.$this->name.', '.'Serial No: '.$this->sl.', '.'Visit-time: '.$this->time.PHP_EOL;
    }
    function save(){
        file_put_contents(self::$pList,$this->show(),FILE_APPEND);
    }

}
?>