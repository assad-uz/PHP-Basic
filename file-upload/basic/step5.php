<?php  
$img = "img/";
$filename = "";
$show_preview = false;

if(isset($_POST['btnSubmit'])) { 
    $filename = $_FILES['my_file']['name'];
    $temp_file = $_FILES['my_file']['tmp_name'];
    $file_size = $_FILES['my_file']['size'];
    $file_type = $_FILES['my_file']['type'];
    $kb = $file_size / 1024;

    $allowed_types = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'];

    if($kb > 400){ 
        echo "❌ File is too large.";
    } 
    elseif (!in_array($file_type, $allowed_types)) {
        echo "❌ Only JPG, JPEG, PNG & GIF files are allowed.";
    } 
    else {
        if (move_uploaded_file($temp_file, $img . $filename)) {
            echo "✅ Successfully uploaded!";
            $show_preview = true;
        } else {
            echo "❌ Upload failed!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data"> 
      <input type="file" name="my_file" required>
      <input type="submit" name="btnSubmit" value="upload">
    </form>

    <?php  
    if($show_preview){
        echo "<img src='" . $img . $filename . "' width='300px'>";
    }
    ?>
</body>
</html>
