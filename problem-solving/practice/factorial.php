<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Enter the number: <br>
        <input type="number" name="fNum"><br><br>
        <input type="submit" name="submit">
    </form>
    <?php
    $num = $_POST["fNum"];
    $fact= 1;
    if ($_POST["submit"]){
        for($i=1; $i<=$num; $i++){
            $fact *= $i;
        }
        echo "<script>alert('The factorial value of $num is $fact.')</script>";
    }
    
    ?>
</body>
</html>