<?php 
$cfile = fopen("newfile.txt", "w") or die ("Unable to open this file");

$text= "Hi everyone, This is me, Assaduzzaman!\n";
fwrite($cfile, $text);

$text = "I'm a post gradute person.\n";
fwrite($cfile, $text);

$text = "I completed my MBA from NU.\n";
fwrite($cfile, $text);

$text = "Now, I'm a student of Web Application Development of IsDB-BISEW.";
fwrite($cfile, $text);

?>