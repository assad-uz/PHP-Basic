<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    function counter(){
        static $count = 0; //Local
        $count++;
        echo $count."<br>";
    }
    counter();
    counter();
    counter();
    ?>
</body>
</html>