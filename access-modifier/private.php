<?php
class Num
{
    private $a = 10;
    private $b = 10;
    function addi()
    {
        return $this->a + $this->b;
        // ভুলটা ছিল এই লাইনে:
        // return $this->$a + $this->$b;
        // এখানে $a এবং $b ভ্যারিয়েবল নয়, বরং এটা ক্লাসের প্রোপার্টি। সেগুলো এক্সেস করতে $this->a এবং $this->b লিখতে হয়।
        // PHP-তে যখন আপনি ক্লাসের ভিতরে প্রোপার্টি এক্সেস করেন $this ব্যবহার করে, তখন আপনাকে সরাসরি প্রোপার্টির নাম দিতে হয়, $ চিহ্ন ছাড়াই
    }
}
$addition = new Num();
echo $addition->addi();
?>