<?php session_start(); ?>

<h2>Login</h2>
<form action="auth.php" method="post">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="submit" name="login" value="Login">
</form>
<p>Don't have an account? <a href="register.php">Register here</a></p>
