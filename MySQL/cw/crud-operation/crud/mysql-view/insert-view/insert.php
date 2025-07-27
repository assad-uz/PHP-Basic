<?php 
$connt= mysqli_connect("localhost","root","","tech_company");
if(isset($_POST['submit'])){
    $b = $_POST['brand'];
    $c = $_POST['country'];

    $connt->query("CALL insert('$b','$c')");
    if(mysqli_query($connt,$sql)==true){
        echo "Data inserted";
        header('location: view.php');
        exit;  // redirect এর পর exit না দিলে সমস্যা হতে পারে।
    }else{
        echo "Data not inserted";
    }
}
// else {
//     echo "Form not submitted!";
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <!-- <title>Medium Size Bootstrap Form</title> -->
  <title>Input Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow p-4" style="width: 100%; max-width: 500px;">
      <h3 class="mb-4 text-center">User Contact Form</h3>
      <form action="insert.php" method="POST">
        <div class="mb-3">
          <label for="brand" class="form-label">Brand:</label>
          <input type="text" class="form-control" id="brand" brand="brand" required>
        </div>

        <div class="mb-3">
          <label for="country" class="form-label">Country:</label>
          <input type="country" class="form-control" id="country" name="country" required>
        </div>

        <button type="submit" class="btn btn-primary w-100" name="submit">Submit</button>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
