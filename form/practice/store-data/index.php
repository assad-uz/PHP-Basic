<?php 
require_once 'patient_data.php';
if(isset($_POST['Submit'])){
    $name = $_POST['pName'];
    $sl = $_POST['sl'];
    $time = $_POST['vTime'];

    $patient = new Patient($name,$sl,$time);
    $patient -> save();
    echo "Successfully Stored! :)";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Data</title>
</head>
<body>
    <form action="#" method="post">
        <label for="pName">Patient name: </label><br>
        <input type="text" name="pName"><br><br>

        <label for="sl">Serial No: </label> <br>
        <input type="number" name="sl"><br><br>

        <label for="vTime">Time: </label> <br>
        <input type="time" name="vTime"><br><br>
        
        <input type="submit" name="Submit">
    </form>
</body>
</html>