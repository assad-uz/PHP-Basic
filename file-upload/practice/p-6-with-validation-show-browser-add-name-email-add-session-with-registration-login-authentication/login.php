<?php 
session_start();

if(isset($_POST['btnSubmit'])){
    $username = $_POST['txtUN'];
    $password = $_POST['pass'];
    $files = file("user.txt");
    $auth = false;

    foreach ($files as $list){
        list($_UN, $_pass) = explode(",", $list);
        if(trim($_UN == $username) && trim($_pass == $password)){
            $auth = true;
            break;
        }
    }
    if($auth){
        $_SESSION['start'] = $username;
        header('Location: file-upload.php');
        exit;
    }else{
        $msg = "Incorrect Username and Password!";
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