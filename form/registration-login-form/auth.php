<?php
session_start();

if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $file = file('users.txt', FILE_IGNORE_NEW_LINES);

    $authenticated = false;

    foreach ($file as $line) {
        list($stored_user, $stored_pass) = explode(",", trim($line));
        if ($stored_user === $username && $stored_pass === $password) {
            $authenticated = true;
            break;
        }
    }

    if ($authenticated) {
        $_SESSION['user'] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Invalid username or password.";
        echo "<br><a href='login.php'>Try again</a>";
    }
}
?>
