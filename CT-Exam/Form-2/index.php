<?php 
require_once 'user_data.php';
if(isset($_POST['Submit'])){
    $id = $_POST['numID'];
    $name = $_POST['txtName'];
    $email = $_POST['uEmail'];

    if(preg_match("/^\d{1,5}$/", $id) && preg_match("/^[a-zA-Z0-9.-_%]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,}$/", $email)){
        $student = new Student($id, $name, $email);
        $student -> save();
        echo "Successfully stored!";
    }else{
        echo "Unvalid ID or, E-mail! Enter a valid ID and E-mail address.";
    }
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
        <label for="numID">ID: </label><br>
        <input type="number" name="numID"><br><br>

        <label for="txtName">Name: </label><br>
        <input type="text" name="txtName"><br><br>
        
        <label for="uEmail">E-mail: </label><br>
        <input type="email" name="uEmail"><br><br>
        
        <input type="submit" name="Submit">
    </form>

    <?php
    Student::display_browser();
    ?>

</body>
</html>