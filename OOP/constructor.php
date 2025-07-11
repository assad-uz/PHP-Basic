<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    class Person{
        public $name;
        public $age;

        function __construct($name,$age){
            $this->name= $name;
            $this->age= $age;
        }

    }
    $obj = new Person("ASSAD",25);
    echo ($obj);
    
    ?>

</body>
</html>