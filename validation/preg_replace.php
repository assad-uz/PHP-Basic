<?php 
$str = "Visit Microsoft";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "Brain Station", $str);
?>