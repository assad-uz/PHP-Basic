<?php 
file_put_contents("datastore.txt", "Line1\nLine2\nLine3\n");
$data = file_get_contents("datastore.txt");
// echo nl2br($data);

// যদি আগের লেখার সাথে যোগ (append) করতে চাই: [append-সংযোজন করা]
file_put_contents("datastore.txt", "Line4\n", FILE_APPEND);
$data = file_get_contents("datastore.txt");

echo nl2br($data);

// FILE_APPEND না দিলে আগের লেখা ডিলিট হয়ে যেত।

?>