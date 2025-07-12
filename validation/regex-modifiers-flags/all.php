<?php 

// সব মিলিয়ে

$pattern = "/^hello.*/ims";

/*
^hello → শুরুতে 'hello'

. → যেকোনো কিছু

* → ০ বা একাধিক বার

i → case-insensitive

m → multiple lines

s → dot (.) newline ও ধরে
*/

/*
---------- Modifier VS Flag ----------
Flag- একটি চিহ্ন বা সংকেত যা regex-এর আচরণ নিয়ন্ত্রণ করে
Modifier - ফ্ল্যাগ ব্যবহারের পদ্ধতি বা কোডে তা সংযুক্ত করার কৌশল

i, m, s, u — এগুলো flag।
/pattern/imsu — এইভাবে লেখা হলে এগুলো Modifier হিসেবে ব্যবহার হচ্ছে।

Flags are the individual options.
Modifiers are how you apply those flags in code.
*/

// এখানে 'i', 'm', 's' — এগুলো ফ্ল্যাগ
// এবং '/^hello.*/ims' — এখানে এগুলো মডিফায়ার হিসেবে ব্যবহার হয়েছে

?>