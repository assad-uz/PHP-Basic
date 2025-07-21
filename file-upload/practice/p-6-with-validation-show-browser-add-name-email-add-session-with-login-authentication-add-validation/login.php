<?php 
session_start();

if(isset($_POST['btnSubmit'])){
    $email = $_POST['txtEm'];
    $password = $_POST['pass'];
    $files = file("user.txt");
    $auth = false;

    if (preg_match("/^[a-zA-Z0-9._%-]+@[a-zA-Z0-9]+\.[a-z]{2,}$/", $email) && preg_match('/^[A-Za-z0-9]{8,}$/', $password)) {
    
    foreach ($files as $list){
        list($_Em, $_pass) = explode(",", $list);
        if(trim($_Em) == $email && trim($_pass) == $password){
            $auth = true;
            break;
        }
    }
    if($auth){
        $_SESSION['start'] = $email;
        header('Location: file-upload.php');
        exit;
    }else{
        $msg = "Incorrect Email or Password!";
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
    <?php 
    echo isset($msg)? $msg : "";
    ?>

    <div> 
        <form action="#" method="post">
            E-mail: 
            <input type="email" name="txtEm" id="" required><br><br>
            Password:
            <input type="password" name="pass" required><br><br>

            <input type="submit" name="btnSubmit" value="Login">

        </form>
    </div>
</body>
</html>