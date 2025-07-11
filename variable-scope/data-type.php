<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Data Type</h3>
    <?php
    $n = "ASSAD";
    // echo "$n";
    var_dump ($n);

    // <h3>integer</h3>
    echo "<br>";
    echo "<br>";
    $num = 35;
    var_dump ($num);

    // <h3>float</h3>
    echo "<br>";
    echo "<br>";
    $num2 = 35.55;
    var_dump ($num2);

    // <h3>Array</h3>
    echo "<br>";
    echo "<br>";
    $a = array("a","b","c");
    var_dump ($a);

    // <h3>Object</h3>
    echo "<br>";
    echo "<br>";
    class Student {
        public $name;
        public $age;

        public function __construct($name, $age){
            $this->name = $name;
            $this->age = $age;
        }

    }
    $obj = new Student ("Assad", 24);
    var_dump ($obj);
    ?>
</body>
</html>