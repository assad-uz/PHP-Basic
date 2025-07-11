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
        return "Bangladesh";
    };
    echo greet();
    echo '<br>';

    function country(){
        return "Hi , Bangladesh!";
    };
    echo country();
    echo '<br>';

    function country2(){
        return "Hi ,"." Bangladesh 2.0!";
    };
    echo country2();
    echo '<br>';

    function say(){
        return strlen("Bangladesh");
    };
    echo say();
    echo '<br>';

    function see(){
        return str_word_count("Love Bangladesh");
    };
    echo see();
    echo '<br>';

    function look(){
        return strrev("Bangladesh");
    };
    echo look();
    echo '<br>';

    function hi(){
        return strtoupper("Bangladesh");
    };
    echo hi();
    echo '<br>';
    
    function nice(){
        return strtolower("Bangladesh");
    };
    echo nice();
    echo '<br>';
    
    function rplace(){
        $text = "I Love Bangladesh";
        return str_replace("Love","Like",$text);
    };
    echo rplace();
    echo '<br>';

    $text2 = "I Love Bangladesh";
    echo str_replace("Love","Want to Go",$text2);

    

    ?>
</body>
</html>