<?php 
class Book{
    public $name = "Islamic History";
    function details(){
        echo "This is a History Book";
    }
}
$HBook = new Book();
echo $HBook->name;
echo '<br>';
echo $HBook->details();
?>