<?php
// x → eXtended format

$pattern = "/
  a     # Match letter a
  b+    # Then one or more b
/x";
echo preg_match($pattern, "abbbb"); // Matches

// এই মোডে আপনি regex-এ comment ও space রাখতে পারেন বোঝার সুবিধার জন্য।

?>