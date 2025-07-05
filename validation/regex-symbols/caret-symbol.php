<?php
/* 1: Start Anchor (স্ট্রিং বা লাইনের শুরু বোঝায়)
 যখন regex-এর বাইরে [ ] এর বাইরে ব্যবহার করা হয়, তখন ^ এর অর্থ হয়: "স্ট্রিং/লাইনটি এই অক্ষর দিয়ে শুরু হতে হবে"
*/

echo preg_match("/^Hello/", "Hello world"); // output: 1 ✅ মিলে যাবে (এটা খুজবে উক্ত word টি শুরুতে আসে কিনা)
echo "<br>";
echo preg_match("/^world/", "Hello world"); // output: 0 ❌ মিলে যাবে না
// note: /^Hello/ → স্ট্রিং "Hello" দিয়ে শুরু হলে ম্যাচ হবে।

// w/o caret
echo "<br>";
echo preg_match("/Hello/", "Hello world"); // output: 1 (এটা খুজবে word টি আসে কিনা)

/* 2: Negation / Not (Character class এর ভিতরে)
 যখন square brackets [ ] এর ভিতরে থাকে, তখন ^ এর অর্থ হয়: "এই অক্ষরগুলো বাদে সবকিছু"
*/

preg_match("/[^0-9]/", "abc"); // output: 1 ✅ ম্যাচ হবে (কারণ অ-সংখ্যা)
preg_match("/[^0-9]/", "123"); // output: 0 ❌ ম্যাচ হবে না (সবই সংখ্যা)
// note /[^0-9]/ → এমন অক্ষর খুঁজবে যা সংখ্যা নয়।

/* string
^abc স্ট্রিং abc দিয়ে শুরু	"abcdef" ✔️
[^abc] a, b, c ছাড়া অন্য কিছু	"d" ✔️, "a" ❌

✅ স্ট্রিং "http" দিয়ে শুরু কি না:
preg_match("/^http/", "https://example.com"); // ম্যাচ হবে

✅ স্ট্রিং-এ সংখ্যা ছাড়া অন্য কিছু আছে কিনা:
preg_match("/[^0-9]/", "123abc"); // ম্যাচ হবে, কারণ 'a' আছে
*/
?>