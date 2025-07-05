<?php
$test = "My lucky number is 5";
if (preg_match("/[2-7]/", $test)) {
    echo "Matched!";
} else {
    echo "Not matched.";
}
?>
