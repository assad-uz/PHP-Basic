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
if(isset($_POST['delete'])){
	$m_id = $_POST['manufacturer_id'];
  $connt->query("DELETE FROM manufacturer WHERE id = '$m_id'");
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
    <button type="submit" class="btn btn-danger w-50" name="delete">Delete</button>
</div>
      </form>
    </div>
  </div>

  <!-- after delete trigger -->

   
<!-- view table -->

<div class="container mt-5">
  <div class="row">
    <!-- All Products Table -->
    <div class="col-md-6">
      <h4 class="mb-3 text-center">All Products</h4>
      <table class="table table-bordered table-striped">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Manufacturer</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          $product = $connt->query("SELECT * FROM product_view");
          while(list($_id,$_name,$_price,$_mname) = $product->fetch_row()){
            echo "<tr>
              <td>$_id</td>
              <td>$_name</td>
              <td>$_price</td>
              <td>$_mname</td>
            </tr>";
          }
          ?>
        </tbody>
      </table>
    </div>

    <!-- Expensive Products Table -->
    <div class="col-md-6">
      <h4 class="mb-3 text-center">Expensive Products (Above 5000 TK)</h4>
      <table class="table table-bordered table-striped">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Manufacturer</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          $expensive = $connt->query("SELECT * FROM expensive_products");
          while(list($_id, $_name, $_price, $_mname) = $expensive->fetch_row()) {
            echo "<tr>
              <td>$_id</td>
              <td>$_name</td>
              <td>$_price</td>
              <td>$_mname</td>
            </tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
