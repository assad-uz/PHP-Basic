<?php
// u → Unicode

$str = "বাংলা";
echo preg_match("/ং/u", $str); // Matches properly because of Unicode mode

// বাংলা/ইংরেজি ছাড়া অন্য ভাষার ক্ষেত্রে u জরুরি।

?>