<?php  
$img = "img/";
$filename = "";
$show_preview = false;
$user_name = "";
$user_email = "";

if(isset($_POST['btnSubmit'])) { 
    $user_name = htmlspecialchars($_POST['name']);
    $user_email = htmlspecialchars($_POST['email']);

    $filename = $_FILES['my_file']['name'];
    $temp_file = $_FILES['my_file']['tmp_name'];
    $file_size = $_FILES['my_file']['size'];
    $file_type = $_FILES['my_file']['type'];
    $kb = $file_size / 1024;

    $allowed_types = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'];

    if(empty($user_name) || empty($user_email)) {
        echo "Name and Email are required.<br>";
    }
    elseif($kb > 400){ 
        echo "File is too large. Limit: 400 KB<br>";
    } 
    elseif (!in_array($file_type, $allowed_types)) {
        echo "Only JPG, JPEG, PNG & GIF files are allowed.<br>";
    } 
    else {
        if (move_uploaded_file($temp_file, $img . $filename)) {
            echo "Successfully uploaded!<br>";
            $show_preview = true;
        } else {
            echo "Upload failed!<br>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload with Name & Email</title>
</head>
<body>
    <h2>Upload Form</h2>
     <form action="" method="post" enctype="multipart/form-data"> 
        <label>Name:</label>
        <input type="text" name="name" required><br><br>

        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <label>Select Image:</label>
        <input type="file" name="my_file" required><br><br>

        <input type="submit" name="btnSubmit" value="Upload">
    </form>

    <?php  
    if($show_preview){
        echo "<h3>User Info:</h3>";
        echo "Name: $user_name <br>";
        echo "Email: $user_email <br><br>";

        echo "<h3>Preview:</h3>";
        echo "<img src='" . $img . $filename . "' width='300px'>";
    }
    ?>
</body>
</html>
