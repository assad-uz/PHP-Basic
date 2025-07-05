<?php
// s → Single dot matches newline (Dot all)

$str = "Hello\nWorld";
preg_match("/Hello.World/s", $str); // Matches across lines

// সাধারণভাবে . new line মেলায় না। s দিলে মেলে।

?>
