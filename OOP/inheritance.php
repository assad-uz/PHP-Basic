<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class A{
        public $name;
        function __destruct(){
            echo "End";
        }
        function Show(){
            echo "Show Method: This is my parent"."<br>";
        }
        function info(){
            echo "info Method: This is my parent". "<br>";
        }
        function __construct($name){
            echo "This is <br>".($this->name = $name)."<br>";
        }
    }
    class B extends A{
        public $batch;
        public $id;
        function stdInfo(){
            echo "Student";
        }
        function __construct($name,$id){
            echo "This is ".$this->name = $name;
            echo "Batch No: ".$this->id = $id;
        }

    }
    $obj = new B("ASSAD", 1288328);
    echo "<br>";
    $obj->Show();
    echo "<br>";
    $obj->stdInfo();

    ?>
</body>
</html>