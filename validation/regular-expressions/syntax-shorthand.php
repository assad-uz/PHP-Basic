<?php
// array
preg_match_all("/[Banana]/", "I Love Banana", $f);
print_r($f);
echo "<br>";
// normal
echo preg_match_all("/[Banana]/", "I Love Banana", $f); 
?>