<?php
$say = "Alhamdulillah for everything";
$p = "/Alhamdulillah/";
echo preg_match($p,$say); //output: 1
echo "<br>";
?>

<?php
$say = "Alhamdulillah for everything";
$p = "/alhamdulillah/";
echo preg_match($p,$say); //output: 0 (case-sensitive)
echo "<br>";
?>

<?php
$say = "Alhamdulillah for everything";
$p = "/alhamdulillah/i";
echo preg_match($p,$say); //output: 1 (i modifier is case-insensitive)
?>
