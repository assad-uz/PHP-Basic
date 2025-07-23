<?php
$db = mysqli_connect("localhost","root","","mydb");
    if(isset($_POST['submit'])){
        $n = $_POST['txtName'];
        $e = $_POST['txtEmail'];
        $c = $_POST['numContact'];

        $db->query("call new_routine('$n','$e','$c')");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container"> 
    <div class="row"> 
        <div class="col-sm-3"></div>
        <a href="view.php">View Result</a>
        <div class="col-sm-6 pt-4 mt-4 border border-success"> 
    <form action="insert.php" method="POST"> 
        Name:<br>
        <input type ="text" name ="txtName"><br><br>
        Email:<br>
        <input type ="email" name ="txtEmail"><br><br>
        Contact:<br>
        <input type ="number" name ="numContact"><br><br>
        <input type ="submit" name ="submit" value="Insert" class="btn btn-success">
    </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
    </div>

</body>
</html>