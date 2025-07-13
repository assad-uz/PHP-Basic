<?php
class User{
    private $uemail;
    private $password;
    private static $list_path = 'list.txt';

    function __construct($_uemail,$_password){
        $this->uemail = $_uemail;
        $this->password = $_password;
    }
    function show_arrange(){
        return 'User Name: '.$this->uemail.', '.'Password: '.$this->password.PHP_EOL;
    }
    function save(){
        file_put_contents(self::$list_path,$this->show_arrange(),FILE_APPEND);
    }
    static function display_browser(){
        $patients_info = file(self::$list_path);
        echo "<b>User Name | Password</b><br>";
        foreach($patients_info as $patient){
           list($uemail,$password) = explode(",",trim($patient));
           echo "$uemail | $password<br>";
        }
    }

}

?>
