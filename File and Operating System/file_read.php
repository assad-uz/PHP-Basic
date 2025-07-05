<?php
$txtfile = fopen("myEmotion.txt", "r",) or die ("Unable to open my emotion!");
echo fread($txtfile, filesize("myemotion.txt"));
fclose($txtfile);
