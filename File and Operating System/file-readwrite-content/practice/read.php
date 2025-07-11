<?php 
$cfile = fopen("newfile.txt", "r") or die ("Unable to open this file");
$r = fread($cfile, filesize("newfile.txt"));
echo nl2br($r);
fclose($cfile);
?>