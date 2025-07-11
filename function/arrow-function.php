<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function info (){
        echo "Hello,";
    }
    info();
    ?>

    <?php 
    $info2 = fn()=>"Bangladesh!";
    echo $info2();
    ?>
    
    <?php 
    $info3 = fn($x)=>$x*2;
    echo $info3(5);
    ?>

</body>
</html>