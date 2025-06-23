<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $firstName = "Assaduzzaman";
    $lastName = "Shaon";
    echo $firstName.' '.$lastName;
    echo '<br>';
    echo '<br>';
    ?>
    <?php
    $name = 'Assad';
    function fName(){
        global $name;
        echo $name;
    };
    fName();
    echo $name;
    ?>
    <?php 
    function name(){
        $name = 'Assad';
        echo $name;
    };
    name();
    echo '<br>'
    ?>
    <?php
    function counter(){
        static $count = 0;
        $count++;
        echo $count.'<br>';
    }
    counter();
    counter();
    counter();
    echo '<br>';
    ?>
    <?php 
    echo $_SERVER['SERVER_NAME'];
    echo '<br>';
    echo $_SERVER['SCRIPT_NAME'];
    echo '<br>';
    echo $_SERVER['SERVER_ADDR'];
    echo '<br>';
    echo $_SERVER['SERVER_PORT'];
    ?>
</body>
</html>