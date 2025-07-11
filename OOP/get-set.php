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
        public $age;
        function set_name($name){
            $this->name=$name;
        }
        function get_name(){
            return $this->name;
        }
    }
    $obj = new A();
    $obj -> set_name('ASSAD');
    echo $obj -> get_name();
    ?>
</body>
</html>