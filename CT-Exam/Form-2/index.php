<?php 
require_once 'user_data.php';
if(isset($_POST['Submit'])){
    $email = $_POST['uemail'];
    $password = $_POST['password'];

    $patient = new User($uemail, $password);
    $patient -> save();
    echo "E-mail and Password stored successfully!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patients Data</title>
</head>
<body>
    <form action="#" method="post">
        <label for="uemail">E-mail: </label><br>
        <input type="text" name="uemail"><br><br>

        <label for="password">Password: </label> <br>
        <input type="number" name="password"><br><br>
        
        <input type="submit" name="Submit">
    </form>

    <?php
    Patient::display_browser();
    ?>

</body>
</html>