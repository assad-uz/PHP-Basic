<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require 'student-class.php'; // External file include
    use AddStdClass\Student;
    $obj = new Student();
    $obj->show();
    ?>
</body>
</html>