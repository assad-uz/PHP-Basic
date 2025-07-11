<?php 
// Static Example (অবজেক্ট ছাড়া কাজ)

class School {
    public static $schoolName = "ABC High School";

    public static function sayWelcome() {
        echo "Welcome to " . self::$schoolName . "<br/>";
    }
}

School::sayWelcome();  // Output: Welcome to ABC High School

?>

/*
ব্যাখ্যা:
এখানে কোনো new School() করতে হয়নি।

আমরা সরাসরি School::sayWelcome() লিখে মেথড কল করেছি।

self:: দিয়ে আমরা static প্রপার্টি অ্যাক্সেস করেছি।

এখানে কোনো $this নেই — কারণ কোনো অবজেক্টই নেই।
*/