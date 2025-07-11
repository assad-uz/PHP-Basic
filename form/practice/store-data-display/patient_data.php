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
        echo "<b>Patient Name | Serial No. | Time</b><br>";
        foreach($patients_info as $patient){
           list($name,$sl,$time) = explode(",",trim($patient));
           echo "$name | $sl | $time <br>";
        }
    }

}

/*
PHP-তে static কিওয়ার্ডটা function এর পরে বসে না, আগে বসে।

file() ফাংশনটি ওই ফাইলের প্রতিটি লাইন একটি একটি করে array-তে রিড করে রাখে।

foreach মানে হচ্ছে → “এই অ্যারে থেকে একেকটা করে মান নাও, আর কাজ করো”

 list() ফাংশনের কাজ হলো — অ্যারের ভেতরের মানগুলোকে একাধিক ভ্যারিয়েবলে আলাদা করে ফেলা।

trim() ফাংশনের কাজ হলো স্ট্রিং-এর শুরু ও শেষে থাকা অপ্রয়োজনীয় স্পেস (whitespace), ট্যাব, নিউলাইন (\n), ক্যারেজ রিটার্ন (\r) — এগুলো কেটে ফেলা।

 ধরো list.txt ফাইলে যদি ৩ জন রোগীর তথ্য থাকে, তাহলে $patient অ্যারেতে ৩টি এলিমেন্ট থাকবে — প্রত্যেকটি একেকটি লাইন (string)
*/
?>
