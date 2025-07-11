<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $add = function($a,$b) {
        return $a+$b;
    };
    echo $add(2020,5);
    ?>

    <?php 
    $x = function ($a){
        echo "Hi, Bangladesh!";
        echo ' '.$a;
    };
    $x(2025);
    ?>

</body>
</html>