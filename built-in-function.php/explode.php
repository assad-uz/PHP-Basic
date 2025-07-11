<?php 
// String → Array
// স্ট্রিংকে একটি নির্দিষ্ট চিহ্ন দ্বারা ভেঙে ছোট ছোট অংশে বিভক্ত করে একটি অ্যারে তৈরি করা।

// M1- Divide by comma
$fruits = "Apple, Banana, Orange, Strawberry";
$array = explode(",",$fruits);
print_r($array);
echo "<br>";
echo "<br>";

// echo $array; // সরাসরি echo দিয়ে array দেখা যায় না।


// M2- Divide by space
$text = "I Love My Mom";
$sentence = explode(" ",$text);
print_r($sentence);
echo "<br>";
echo "<br>";


// M3- Control Limit
$text = "I Love My Mom";
$sentence = explode(" ",$text, 3);
print_r($sentence);

?>