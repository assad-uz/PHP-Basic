<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $cars = array (
        array ("BMW", "White", 2025),
        array ("Audi", "Mate Black", 2025),
        array ("Mercedise", "Red", 2025),
        array ("Lamborghini", "Yellow", 2025),
    );
    echo $cars[1][0];
    echo '<br>';
    echo '<br>';
    print_r($cars);
    echo '<br>';
    echo '<br>';
    print_r($cars[3]);

    echo '<br>';
    echo '<br>';
    for($i=0; $i<4; $i++){ //i=row
        echo "<p><b>Title $i</b></p>";
        for($k=0; $k<3; $k++){ //k=column
            echo $cars[$i][$k]."<br>";
        }
    }


    echo '<br>';
    echo '<br>';
    $arr = array(
        array(
            array(1,2),
            array(3,4),
        ),
        array(
            array(5,6),
            array(7,8),
        ),
    );
    print_r($arr);
    echo '<br>';
    echo '<br>';
    print_r($arr[1]);

    echo '<br>';
    echo '<br>';
    print_r($arr[1][1]);

    echo '<br>';
    echo '<br>';
    print_r($arr[1][1][0]);
    

    ?>
</body>
</html>