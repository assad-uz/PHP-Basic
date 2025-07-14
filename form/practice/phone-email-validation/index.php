<?php 
require_once 'patient_data.php';
if(isset($_POST['Submit'])){
    $name = $_POST['pName'];
    $sl = $_POST['sl'];
    $time = $_POST['vTime'];
    $email = $_POST['pEmail'];
    $phone = $_POST['pNum'];

    if(preg_match("/^[a-zA-Z0-9.-_%]+@[a-zA-Z0-9]+\.[a-z]{2,}$/", $email) && preg_match("/^01[3-9]\d{8}$/",$phone)){
    $patient = new Patient($name,$sl,$time,$email,$phone);
    $patient -> save();
    echo "Successfully Stored! :)";
    }else {
        $mesge = "Invalid E-mail or Phone number!";
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
    <?php 
    echo isset($mesge)? $mesge : '';
    ?>

    <form action="#" method="post">
        <label for="pName">Patient name: </label><br>
        <input type="text" name="pName"><br><br>

        <label for="sl">Serial No: </label> <br>
        <input type="number" name="sl"><br><br>

        <label for="vTime">Time: </label> <br>
        <input type="time" name="vTime"><br><br>

        <label for="pEmail">E-mail: </label> <br>
        <input type="email" name="pEmail"><br><br>

        <label for="pNum">Contact No: </label> <br>
        <input type="number" name="pNum"><br><br>
        
        <input type="submit" name="Submit">
    </form>

    <?php
    Patient::display_browser();
    ?>

</body>
</html>