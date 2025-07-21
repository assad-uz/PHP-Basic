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
