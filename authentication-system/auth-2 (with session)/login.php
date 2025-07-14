<?php 
session_start(); //New

if(isset($_POST['logIn'])){
    $username = $_POST['UN'];
    $password = $_POST['pass'];
    $txtfile = file("pass.txt");
    $authenticated = false;

    foreach($txtfile as $list){
        list($_UN,$_Pass) = explode(",", $list);
        if (trim($_UN) == trim($username) && trim($_Pass) == trim($password)){ // File-based login system এ এটা অনেক গুরুত্বপূর্ণ, কারণ .txt ফাইলে newline/space থাকতেই পারে।
            $authenticated = true; 
            break;
        }
    }
    if($authenticated){
        $_SESSION['start'] = $username; //New
        header("Location: first-page.php");
        exit;
    }else{
        // echo "<script>alert('Username or password is incorrect! Try Again.')</script>";
        $message = "Username or password is incorrect! Try again.";
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
    echo isset($message)? $message : '';
    ?>
    <form action="#" method="post">
        <div> 
        <label for="UN">Username: </label><br>
        <input type="text" name="UN" required><br><br>

        <label for="pass">Password: </label><br>
        <input type="password" name="pass" required><br><br>

        <input type="submit" name="logIn" value="Log in">
        </div>
    </form>
</body>
</html>