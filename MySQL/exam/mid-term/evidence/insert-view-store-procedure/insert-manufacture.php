<?php 
$connt= mysqli_connect("localhost","root","","manufacture_company");

if(isset($_POST['submit'])){
    $n = $_POST['name'];
    $a = $_POST['address'];
    $c = $_POST['contact_no'];

    // Stored Procedure Call
    $store = $connt->query("call call_insert_m('$n','$a','$c')");
    if($store){
        echo "Data inserted";
        // header('location: view.php');
        // exit;
    }else{
        echo "Data not inserted" . $connt->error; 
    }
}
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
      <h3 class="mb-4 text-center">Manufacturer Contact Form</h3>
      <form action="#" method="POST">
        <div class="mb-3">
          <label for="name" class="form-label">Name:</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div> 

        <div class="mb-3">
          <label for="address" class="form-label">Address:</label>
          <input type="text" class="form-control" id="address" name="address" required>
        </div>

        <div class="mb-3">
          <label for="contact_no" class="form-label">contact_no:</label>
          <input type="text" class="form-control" id="contact_no" name="contact_no" required>
        </div>
        
        <button type="submit" class="btn btn-primary w-100" name="submit">Submit</button>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
