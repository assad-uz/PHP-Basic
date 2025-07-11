<?php 

if(isset($_POST['btnLogin'])){
    $username = $_POST['txtUsername'];
    $password = $_POST['txtPassword'];
    $file = file('data.txt');

    foreach($file as $line){
        list($_username, $_password)=explode(', ', trim($line));
        if($_username == $username && $_password == $password){
            header('location:demo.php');
            exit;
        } else{
            $msg = 'Username or Password is incorrect!';
        }
    }
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
    <form method="post">
        Username: <br>
        <input type="text" name="txtUsername"><br><br>
        Password: <br>
        <input type="text" name="txtPassword"><br><br>
        <input type="submit" name="btnLogin">
    </form>

    <?php if (isset($msg)) echo "<p style='color:red;'>$msg</p>"; ?>

</body>
</html>