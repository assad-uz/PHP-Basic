<?php
$txtfile = fopen("myemotion.txt", "w",) or die ("Unable to open my emotion!");
$text = "Why are you coming here?\n";
fwrite($txtfile, $text);

$text = "Did you know how much I miss you?\n";
fwrite($txtfile, $text);

$text = "I miss your voice.\n";
fwrite($txtfile, $text);

$text = "I miss your eyes.\n";
fwrite($txtfile, $text);

$text = "I miss your smile.\n";
fwrite($txtfile, $text);

$text = "I miss your everything...\n";
fwrite($txtfile, $text);

$text = "Did you?\n";
fwrite($txtfile, $text);
?>