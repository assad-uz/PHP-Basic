<?php
if (isset($_POST['register'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if ($username !== "" && $password !== "") {
        $line = $username . "," . $password . PHP_EOL;
        file_put_contents("users.txt", $line, FILE_APPEND);
        echo "Registration successful! <a href='login.php'>Login now</a>";
    } else {
        echo "❌ All fields are required.";
    }
}
?>

<h2>Register</h2>
<form method="post">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="submit" name="register" value="Register">
</form>
