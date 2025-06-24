<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function info ($num){
        if($num<=8){
            echo "$num <br>";
            info ($num+1);
        }
    }
    info (3);
    ?>
</body>
</html>