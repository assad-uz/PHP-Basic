<?php 
// ob_start();  (to avoid header issues) যদি header() এর আগে কিছু output চলে আসে (যেমন whitespace, echo), তাহলে কাজ করবে না।  তাই রিস্ক এড়ানোর জন্য এই ফাংশন ব্যবহার করেছি। 
// This is login page

if(isset($_POST['logIn'])){
    $username = $_POST['UN'];
    $password = $_POST['pass'];
    $txtfile = file("pass.txt");
    $authenticated = false;

    foreach($txtfile as $list){
        list($_UN,$_Pass) = explode(",", $list);
        if($_UN == $username && $_Pass == $password){
            $authenticated = true;
            break;
        }
    }
    if($authenticated){
        header("Location: first-page.php");
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
        <input type="text" name="UN"><br><br>
        <label for="pass">Password: </label><br>
        <input type="password" name="pass"><br><br>
        <input type="submit" name="logIn" value="Log in">
        </div>
    </form>
</body>
</html>