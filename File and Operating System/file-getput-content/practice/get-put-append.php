<?php 
file_put_contents("row.txt", "Row1\nRow2\nRow3\n");
$row = file_get_contents("row.txt");
file_put_contents("row.txt","Row4", FILE_APPEND);
$row = file_get_contents("row.txt");
echo nl2br($row);
?>