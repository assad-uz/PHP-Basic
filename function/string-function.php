<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function name (){
        return strlen("Bangladesh");
    };
    echo name();
    echo "<br>";
    ?>

    <?php 
    function wordCount(){
        return str_word_count("My name is Assad.");
    };
    echo wordCount();
    echo "<br>";
    ?>
</body>
</html>