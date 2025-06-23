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
        echo is_numeric(25);
    };
    num();
    echo '<br>';

    function num2(){
        echo ("Round: ".round(34.4535));
    };
    num2();
    echo '<br>';
    
    function num3(){
        echo ("Random: ".rand(1000,9999));
    };
    num3();
    ?>
</body>
</html>