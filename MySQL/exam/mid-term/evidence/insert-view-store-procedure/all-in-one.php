<?php 
$connt = mysqli_connect("localhost", "root", "", "manufacture_company");

$successMessage = ""; // Insert message holder
$deleteMessage = ""; // Delete message holder

// Manufacturer Insert
if(isset($_POST['submit_m'])) {
    $n = $_POST['name'];
    $a = $_POST['address'];
    $c = $_POST['contact_no'];
    $store = $connt->query("CALL call_insert_m('$n', '$a', '$c')");
    if ($store) {
        $successMessage = "✅ Manufacturer inserted successfully!";
    }
}

// Product Insert
if(isset($_POST['submit_p'])) {
    $n = $_POST['pname'];
    $p = $_POST['price'];
    $m_id = $_POST['manufacturer_id'];
    $store = $connt->query("CALL call_insert_p('$n', '$p', '$m_id')");
    if ($store) {
        $successMessage = "✅ Product inserted successfully!";
    }
}

// Manufacturer Delete (and products if trigger is set)
if(isset($_POST['delete_m'])) {
    $m_id = $_POST['manufacturer_id'];
    $connt->query("DELETE FROM manufacturer WHERE id = '$m_id'");
    $deleteMessage = "🗑️ Manufacturer deleted successfully!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Manufacturer & Product Management</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <!-- start alert message -->
  <?php if (!empty($successMessage)): ?>
  <div class="container mt-3">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <?= $successMessage ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  </div>
<?php endif; ?>

<?php if (!empty($deleteMessage)): ?>
  <div class="container mt-3">
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <?= $deleteMessage ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  </div>
<?php endif; ?>
<!-- end alert message -->

  <div class="row">
<!-- Manufacturer Form -->
<div class="col-md-6">
  <div class="card shadow p-4">
    <h4 class="mb-4 text-center text-muted fw-bold border-bottom pb-2">Manufacturer Form</h4>
    <form method="POST">
      <div class="mb-3">
        <label class="form-label">Name:</label>
        <input type="text" class="form-control" name="name" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Address:</label>
        <input type="text" class="form-control" name="address" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Contact No:</label>
        <input type="text" class="form-control" name="contact_no" required>
      </div>
<div class="d-flex gap-3">
  <button type="submit" class="btn btn-primary w-50" name="submit_m">Submit Manufacturer</button>
  <button type="button" class="btn btn-success w-50" data-bs-toggle="modal" data-bs-target="#manufacturerModal">
    View Manufacturer
  </button>
</div>

</form>
</div>
</div>


    <!-- Product Form -->
    <div class="col-md-6">
      <div class="card shadow p-4">
        <h4 class="mb-4 text-center text-muted fw-bold border-bottom pb-2">Product Form</h4>
        <form method="POST">
          <div class="mb-3">
            <label class="form-label">Product Name:</label>
            <input type="text" class="form-control" name="pname">
          </div>
          <div class="mb-3">
            <label class="form-label">Price:</label>
            <input type="text" class="form-control" name="price">
          </div>
          <div class="mb-3">
            <label class="form-label">Manufacturer:</label>
            <select class="form-select" name="manufacturer_id">
              <?php 
              $manufac = $connt->query("SELECT * FROM manufacturer");
              while(list($_mid, $_mname) = $manufac->fetch_row()) {
                echo "<option value='$_mid'>$_mname</option>";
              }
              ?>
            </select>
          </div>
          <div class="d-flex gap-3">
            <button type="submit" class="btn btn-primary w-50" name="submit_p">Add Product</button>
            <button type="submit" class="btn btn-danger w-50" name="delete_m">Delete Manufacturer</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Views -->
  <div class="row mt-5">
    <!-- Products Table -->
    <div class="col-md-6">
      <h4 class="mb-4 text-center text-success fw-semibold border-bottom pb-2">All Products</h4>
      <table class="table table-bordered table-striped">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Name</th>
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
      <h4 class="mb-4 text-center text-success fw-semibold border-bottom pb-2">Expensive Products (Above 5000 TK)</h4>
      <table class="table table-bordered table-striped">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Name</th>
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

<!-- Manufacturer Modal -->
<div class="modal fade" id="manufacturerModal" tabindex="-1" aria-labelledby="manufacturerModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="manufacturerModalLabel">Manufacturer List</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered table-striped">
          <thead class="table-dark">
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Address</th>
              <th>Contact No</th>
            </tr>
          </thead>
          <tbody>
      <?php 
      $result = $connt->query("SELECT * FROM manufacturer");
      while(list($_id,$_name,$_address,$_contact) = $result->fetch_row()) {
        echo "<tr>
          <td>$_id</td>
          <td>$_name</td>
          <td>$_address</td>
          <td>$_contact</td>
        </tr>";
      }
      ?>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
