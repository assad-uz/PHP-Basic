<?php
// list() ফাংশনের কাজ হলো — অ্যারের ভেতরের মানগুলোকে একাধিক ভ্যারিয়েবলে আলাদা করে ফেলা।
/*
Syntax:
list($a, $b, $c) = [10, 20, 30];
এখানে $a = 10, $b = 20, $c = 30 হয়ে যাবে।
*/
$data = ["Assad", "WDPF", "5th"];

list($name, $department, $module) = $data;

echo "Name: $name, Dept: $department, Module: $module";

/*
Output:
Name: Assad, Dept: WDPF, Module: 5th

*/

?>