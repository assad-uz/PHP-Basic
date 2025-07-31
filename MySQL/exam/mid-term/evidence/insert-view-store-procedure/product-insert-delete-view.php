<?php 
$connt= mysqli_connect("localhost","root","","manufacture_company");
// add products
if(isset($_POST['submit'])){
    $n = $_POST['name'];
    $p = $_POST['price'];
    $m_id = $_POST['manufacturer_id'];
    $store = $connt->query("call call_insert_p('$n','$p','$m_id')");
}
// delete products with manufacture id
if(isset($_POST['delmanufact'])){
	$mid = $_POST['manufac'];
	$db->query(" delete from manufacturer where id='$mid ' ");
}
?>

<!-- product table-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Product Table</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow p-4" style="width: 100%; max-width: 500px;">
      <h3 class="mb-4 text-center">Product Table</h3>
      <form action="#" method="POST">
        <div class="mb-3">
          <label for="name" class="form-label">Name:</label>
          <input type="text" class="form-control" id="name" name="name">
        </div> 

        <div class="mb-3">
          <label for="price" class="form-label">Price:</label>
          <input type="text" class="form-control" id="price" name="price">
        </div>

<div class="mb-3">
  <label class="form-label" for="manufacture_id">Manufacturer:</label>
  <select class="form-select" name="manufacturer_id" required>
    <?php 
      $manufac = $connt->query("SELECT * FROM manufacturer");
      while(list($_mid, $_mname) = $manufac->fetch_row()) {
        echo "<option value='$_mid'>$_mname</option>";
      }
    ?>
  </select>
</div>        
<div class="d-flex gap-5">
    <button type="submit" class="btn btn-primary w-50" name="submit">Submit</button>
    <button type="submit" class="btn btn-danger w-50" name="delmanufac">Delete</button>
</div>
      </form>
    </div>
  </div>

  <!-- after delete trigger -->

   

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
