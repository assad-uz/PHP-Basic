<?php 
session_start();

if(isset($_POST['btnSubmit'])){
    $username = $_POST['txtUN'];
    $password = $_POST['pass'];
    $files = file("user.txt");
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
    <div> 
        <form action="#" method="post">
            Username: 
            <input type="text" name="txtUN" id=""><br><br>
            Password:
            <input type="password" name="pass"><br><br>

            <input type="submit" name="btnSubmit" value="Login">

        </form>
    </div>
</body>
</html>