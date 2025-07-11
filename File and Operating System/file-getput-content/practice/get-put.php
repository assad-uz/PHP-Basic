<?php
file_put_contents("list.txt", "Hey! how is it going bro?");
$see = file_get_contents("list.txt");
echo $see;
?>