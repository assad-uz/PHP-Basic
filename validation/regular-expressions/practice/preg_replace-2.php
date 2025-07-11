<?php
$text = "My fav color is purple.";
$newText = preg_replace("/purple/", "grey", $text);
echo $newText; // The color is blue.
echo "<br>";
?>

<!-- another way -->
<?php
$text = "My fav color is purple.";
$pattern = "/purple/";
echo preg_replace($pattern, "green", $text);
?>
