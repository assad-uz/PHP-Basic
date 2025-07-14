<?php 
// Input: Array → Output: String
// একটি অ্যারের উপাদানগুলোকে একত্রিত করে একটি স্ট্রিং তৈরি করা। এটা explode()-এর উল্টো কাজ করে।

// M1- Connect with comma
$arry = ['Apple','Banana','Orange'];
$str = implode(', ',$arry);
echo $str;

echo "<br>";

// M2- Connect with space
$text = ['I','love','my','wife.'];
$sentence = implode(' ',$text);
echo $sentence;

echo "<br>";

// M3- Connect w/o separator
$text = ['I','love','my','children.'];
$sentence2 = implode('',$text);
echo $sentence2;

?>