<?php 
require_once "student_class.php";
if(isset($_POST['btnSubmit'])){
    $id= $_POST['numID'];
    $name= $_POST['txtName'];
    $batch= $_POST['numBatch'];

    $student = new Student($id,$name,$batch);
    $student->save();
    echo "Successfully Stored Data!";

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
    <form action="#" method="post">
        ID: <br>
        <input type="number" name="numID"><br><br>
        Name: <br>
        <input type="text" name="txtName"><br><br>
        Batch: <br>
        <input type="number" name="numBatch"><br><br>
        <input type="submit" name="btnSubmit">
    </form>
    <hr>
    <?php
    Student::display_info();
    ?>
</body>
</html>
