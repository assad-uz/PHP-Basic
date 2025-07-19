<?php
if(isset($_POST['btnSub'])){
    $filename = $_FILES['up1']['name'];
    $file_type = $_FILES['up1']['type'];
    $tmp_file = $_FILES['up1']['tmp_name'];
    $file_size = $_FILES['up1']['size'];

    $img = "img/";

    if()
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
        <form action="#" method="post"  enctype="multipart/form-data">
            <label for="up1">Upload your file: </label>
            <input type="file" name="up1"><br><br>

            <input type="submit" value="Upload" name="btnSub">
        </form>
    </div>
</body>
</html>