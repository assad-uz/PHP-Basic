<?php 
$str = "The rain in SPAIN fall mainly on the plains.";
$pattern ="/in/i";
echo preg_match_all($pattern, $str);
?>