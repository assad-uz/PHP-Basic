<?php
class Patient{
    private $name;
    private $sl;
    private $time;
    private $email;
    private $phone;

    private static $list_path = 'list.txt';

    function __construct($_name,$_sl,$_time,$_email,$_phone){
        $this->name = $_name;
        $this->sl = $_sl;
        $this->time = $_time;
        $this->email = $_email;
        $this->phone = $_phone;
    }
    function show_arrange(){
        return 'Patient Name: '.$this->name.', '.'Serial No: '.$this->sl.', '.'Visit-time: '.$this->time.', '.'E-mail: '.$this->email.', '.'Contact: '.$this->phone.PHP_EOL;
    }
    function save(){
        file_put_contents(self::$list_path,$this->show_arrange(),FILE_APPEND);
    }
    static function display_browser(){
        $patients_info = file(self::$list_path);
        echo "<b>Patient Name | Serial No. | Time | E-mail | Contact No.</b><br>";
        foreach($patients_info as $patient){
           list($name,$sl,$time,$email,$phone) = explode(",",trim($patient));
           echo "$name | $sl | $time | $email | $phone<br>";
        }
    }

}

?>
