<?php 
$connt= mysqli_connect("localhost","root","","e_commerce");
if(isset($_POST['submit'])){
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Medium Size Bootstrap Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow p-4" style="width: 100%; max-width: 500px;">
      <h3 class="mb-4 text-center">User Contact Form</h3>
      <form action="process.php" method="POST">
        <div class="mb-3">
          <label for="name" class="form-label">Name:</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email:</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
          <label for="contact" class="form-label">Contact:</label>
          <input type="text" class="form-control" id="contact" name="contact" required>
        </div>

        <button type="submit" class="btn btn-primary w-100" name="submit">Submit</button>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
