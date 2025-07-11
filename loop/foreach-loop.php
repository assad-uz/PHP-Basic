<?php 
// foreach হচ্ছে PHP-এর এমন একটি লুপ যা array বা iterable ডেটা থেকে একটি একটি করে মান বের করে আনে এবং তুমি প্রতিটি মান নিয়ে কাজ করতে পারো।
// টেবিল আকারে দেখতে (HTML)


$fruits = "Apple,Banana,Mango"; // $fruits একটি string — এটা কোনো array না, তাই foreach কাজ করবে না।
$fruitArray = explode(",", $fruits); // এখন এটা একটা array
foreach($fruitArray as $fruit){
    echo $fruit . "<br>";
}
echo "<br>";
/*
Output:

Apple
Banana
Mango

*/
?>

<?php
// শুধু value নিয়ে কাজ করলে 
/*
 syntax: foreach ($array as $value) {
    // এখানে $value দিয়ে কাজ করবো 
}
*/

$names = ["Rakib", "Sakib", "Nayeem"];

foreach ($names as $name) {
    echo "Hello, $name!<br/>";
}

/*
output:
Hello, Rakib!
Hello, Sakib!
Hello, Nayeem!
---
$names অ্যারেতে ৩টি মান আছে

foreach লুপ ৩ বার চলবে

প্রতিবার $name ভেরিয়েবল একেকটি নাম পাবে

এরপর echo দিয়ে তা দেখানো হচ্ছে
*/
echo "<br>";
?>

<?php 
// key ও value দুটোই দরকার হলে 

$students = [
    101 => "Rakib",
    102 => "Sakib",
    103 => "Nayeem"
];

foreach ($students as $id => $name) {
    echo "ID: $id | Name: $name <br/>";
}

/*
output:
ID: 101 | Name: Rakib
ID: 102 | Name: Sakib
ID: 103 | Name: Nayeem
---

*/
?>
