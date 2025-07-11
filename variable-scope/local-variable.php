<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    function greet (){
        $message = "Hello World"; //Local
        echo $message;
    }
    greet ()
    // echo $message; (here will be error) 
    ?>
</body>
</html>