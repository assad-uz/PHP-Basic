<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $time = time();
    echo $time;
    echo '<br>';

    echo date('d-m-y');
    echo '<br>';

    echo date('y');
    echo '<br>';

    echo date('l');
    echo '<br>';

    echo date('h:i:s a');
    echo '<br>';

    echo date('h:i:s a',$time+120);
    echo '<br>';

    echo date('H:i:s');
    echo '<br>';

    echo date('r');
    echo '<br>';
    
    ?>
</body>
</html>