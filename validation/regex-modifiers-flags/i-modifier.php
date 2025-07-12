<?php

// i → Ignore case: ছোট/বড় হাতের অক্ষরকে এক মনে করে। a = A
// i modifier is case-insensitive

echo preg_match("/php/i", "I love PHP"); // Match will be found

// PHP, php, Php সবগুলোতেই মিল খুঁজে পাবে।

echo "<br>"
?>

<?php
$say = "Alhamdulillah for everything";
$p = "/alhamdulillah/i";
echo preg_match($p,$say); //output: 1
?>
