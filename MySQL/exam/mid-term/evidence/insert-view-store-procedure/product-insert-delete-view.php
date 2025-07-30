<!-- insert_manufacturer -->
<?php 
$connt= mysqli_connect("localhost","root","","manufacture_company");
// add products
if(isset($_POST['submit'])){
    $n = $_POST['name'];
    $p = $_POST['price'];
    $m_id = $_POST['manufacture_id'];
    $store = $connt->query("call call_insert_p('$n','$p','$m_id')");
}
// delete manufacturer with products
if(isset($_POST['delmanufact'])){
	$mid = $_POST['manufac'];
	$db->query(" delete from manufacturer where id='$mid ' ");
}
?>

<!-- products form and views-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Input Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow p-4" style="width: 100%; max-width: 500px;">
      <h3 class="mb-4 text-center">Product Information</h3>
      <form action="#" method="POST">
        <div class="mb-3">
          <label for="name" class="form-label">Name:</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div> 

        <div class="mb-3">
          <label for="price" class="form-label">Price:</label>
          <input type="text" class="form-control" id="price" name="price" required>
        </div>

        <div class="mb-3">
          <label for="manufacture_id" class="form-label">manufacture_id:</label>
          <input type="text" class="form-control" id="manufacture_id" name="manufacture_id" required>
        </div>
        
        <button type="submit" class="btn btn-primary w-100" name="submit">Submit</button>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
