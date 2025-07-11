<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    trait A{
        public function start(){
            echo "START from here";
        }
        public function end(){
            echo "Here is the END";
        }
    }
    trait B{
        function display(){
            echo "Nice Scenario";
        }
    }
    trait C{
        function greet(){
            echo "Hi, Bangladesh!";
        }
    }
    class Talking{
        use C; //single
        // use A,B,C (double)
        public $name;
        public $age;
        function addition(){
            echo (2+5);
        }
    }
        $obj = new Talking;
        echo '<br>';
        $obj->addition();
        echo '<br>';
        $obj->greet();
    
    ?>
</body>
</html>