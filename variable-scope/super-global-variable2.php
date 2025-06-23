<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo $_GET['fname'];
    echo '<br>';
    echo $_GET['email'];
    ?>
    <form action="#" method=get>
        Name: <br>
        <input type="text" name="fname"> <br>
        Email: <br>
        <input type="email" name="email"> <br> 
        <input type="submit" value="Submit">
    </form>
</body>
</html>