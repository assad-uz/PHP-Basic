<?php 
// step 2:
require_once("student_class.php");
if(isset($_POST["btnSubmit"])){
    $id = $_POST["numID"];
    $name = $_POST["txtName"];
    $course = $_POST["txtCourse"];
    $phone = $_POST["numPhone"];
    if(preg_match("/^[0-9+]{11,14}$/",$phone)){
        $student = new Student($id,$name,$course,$phone);
        $student->save();
        echo "Success!";
    } else{
        echo "Invalid Phone";
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
    <form method="post">
        ID: <br>
        <input type="number" name="numID"><br><br>
        Name: <br>
        <input type="text" name="txtName"><br><br>
        Course: <br>
        <input type="text" name="txtCourse"><br><br>
        Phone: <br>
        <input type="number" name="numPhone"><br><br>
        <input type="submit" name="btnSubmit">
    </form>

    <?php
    Student::display_students();
    ?>
</body>
</html>