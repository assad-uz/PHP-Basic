<?php
session_start();
if(!isset($_SESSION['start'])){
    header('Location: login.php');
    exit;
}

$img = "img/";
$filename = "";
$show_preview = false;

if(isset($_POST['btnSub'])){
    $username = $_POST['txtName'];
    $useremail = $_POST['txtEmail'];

    $filename = $_FILES['up1']['name'];
    $file_type = $_FILES['up1']['type'];
    $temp_file = $_FILES['up1']['tmp_name'];
    $file_size = $_FILES['up1']['size'];

    $allowed_type = ["image/jpeg", "image/jpg", "image/png", "image/gif"];
    $kb = $file_size / 1024;
    
    if(!in_array($file_type, $allowed_type)){
        echo "File type is not matching. File type only allow JPEG, JPG, PNG and GIF";
    }elseif($kb>500){
        echo " File size is too large. Maximum file size should be 500 KB";
    }else{
        if(move_uploaded_file($temp_file, $img . $filename)){
            echo "Upload Successful";
            $show_preview = true;
        }else{
            echo "Upload Failed";
        }
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

<div>
    <form action="#" method="post" enctype="multipart/form-data">
        <label for="txtName">Name: </label>
        <input type="text" name="txtName"><br><br>

        <label for="txtEmail">E-mail: </label>
        <input type="email" name="txtEmail"><br><br>

        <label for="up1">JPG file upload here: </label>
        <input type="file" name="up1"><br><br>
        <input type="submit" value="Upload" name="btnSub">
    </form>
</div>

<?php 
if($show_preview){
    echo "Name: . $username . <br>";
    echo "E-mail: . $useremail . <br>";
    echo "<h3>Preview Uploaded File</h3>";
    echo "<img src='" .$img . $filename ."' width='300px'>";
}
?>
<br>
<a href="login.php">Logout</a>;

</body>
</html>