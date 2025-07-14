<?php
session_start();
echo session_id();

/*
Debug করতে
তুমি চেক করতে পারো session active কিনা:

echo session_id(); // যদি সেশন active থাকে, তাহলে ID দেখাবে 8t5a6f5o96eb2v1h4nrhclbi3ps

কিন্তু যদি session_start(); active না থাকে?
তাহলে Output হবে:

(empty string)
কারণ: সেশন শুরুই হয়নি, তাই কোনো আইডিও নেই।
*/
?>
