<?php
$img = "img\";
$filename = "";


if(isset($_POST['btnSub'])){
    $filename = $_FILES['btnSub']['name'];
    $file_type = $_FILES['btnSub']['type'];
    $temp_file = $_FILES['btnSub']['temp_name'];
    $file_size = $_FILES['btnSub']['size'];

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

<div>
    <form action="#" method="post" enctype="multipart/form-data">
        <label for="up1">JPG file upload here: </label>
        <input type="file" name="up1"><br><br>
        <input type="submit" value="Upload" name="btnSub">
    </form>
</div>
</body>
</html>