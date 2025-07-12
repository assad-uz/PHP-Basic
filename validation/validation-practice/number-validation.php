<?php
// ex-1
$num = '01515255259';
if (preg_match("/^01[3-9]\d{8}$/",$num)){
    echo "Valid Bangladeshi number!";
}else{
    echo "Invalid number!";
}
echo "<br>";
?>

<?php
// ex-2
$num2 = '01515255259';
if (preg_match("/^\+8801[3-9]\d{8}$/",$num2)){ //if country code mendatory
    echo "Valid Bangladeshi number with country code!";
}else{
    echo "Invalid number with country code!";
}

echo "<br>";
?>


<?php
// ex-3
$num3 = '01515255259';
if (preg_match("/^(\+88)?01[3-9]\d{8}$/",$num3)){ //if country code optional
    echo "Valid Bangladeshi number";
}else{
    echo "Invalid number";
}
?>


<!-- 
PHP-তে যদি কোনো সংখ্যা ০ দিয়ে শুরু হয়, তাহলে PHP এটাকে ধরে Octal (৮ ভিত্তিক সংখ্যা) হিসেবে। PHP এটিকে Octal (৮-ভিত্তিক) হিসেবে রূপান্তর করতে গিয়ে ভিতরের ডিজিট (8, 9) দেখে ভুল ধরবে, এবং PHP এটাকে একটি ভিন্ন ভ্যালু হিসেবে ব্যাখ্যা করে ফেলে। নাম্বারটিকে string বানাতে হবে।
-->