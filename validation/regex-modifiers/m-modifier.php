<?php
// m → Multiline mode 
// 	^ এবং $ প্রতিটি লাইনের শুরু ও শেষে কাজ করে

$str = "Hello\nWorld";
echo preg_match("/^World/m", $str); // Matches 'World' at new line start

// ^ ও $ এখন শুধু পুরো স্ট্রিং নয়, প্রতিটি লাইনের ক্ষেত্রেও কাজ করবে।
// মনে রাখবেন: m modifier ব্যবহার করেন যখন স্ট্রিং-এ একাধিক লাইন থাকে, এবং আপনি প্রতিটি লাইনে regex প্রয়োগ করতে চান।

echo "<br>"
?>

/*
| Symbol | Without `m`     | With `m`         |
| ------ | --------------- | -----------------|
| `^`    | স্ট্রিং-এর শুরু     | প্রতিটি লাইনের শুরু |
| `$`    | স্ট্রিং-এর শেষ     | প্রতিটি লাইনের শেষ |
*/

<?php 
$str = "Line1\nLine2\nLine3";

preg_match_all("/^Line\d/m", $str, $matches);
print_r($matches);

?>
