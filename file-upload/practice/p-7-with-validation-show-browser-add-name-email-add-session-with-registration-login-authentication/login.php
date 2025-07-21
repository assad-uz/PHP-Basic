<?php
session_start();
if(!isset($_SESSION['start'])){
    header('Location: login.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo isset($msg)? $msg : "";
    ?>

    <div> 
        <form action="#" method="post">
            Username: 
            <input type="text" name="txtUN" id="" required><br><br>
            Password:
            <input type="password" name="pass" required><br><br>

            <input type="submit" name="btnSubmit" value="Login">

        </form>
    </div>
</body>
</html>