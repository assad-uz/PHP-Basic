<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function num(){
        echo is_numeric (25);
    };
    num();
    echo '<br>';

    function num2(){
        echo is_numeric ("Bangladesh");
    };
    num2();
    echo '<br>';

    function num3(){
        echo round (25.51);
    };
    num3();
    echo '<br>';

    function num4(){
        echo round (25.50);
    };
    num4();
    echo '<br>';

    function num5(){
        echo round (25.49);
    };
    num5();
    echo '<br>';

    function num6(){
        echo ("Random Number: ".rand(1000,9999));
    };
    num6();
    echo '<br>';

    ?>
</body>
</html>