<?php
// Alternation/OR Operator
$txt = "I love cats and dogs.";
if (preg_match("/cat|dog/", $txt)) {
    echo "Cat or Dog found!";
}
?>
