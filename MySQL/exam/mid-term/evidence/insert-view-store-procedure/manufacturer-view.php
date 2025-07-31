<?php 
$connt = mysqli_connect("localhost", "root", "", "manufacture_company");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>All Manufacturers</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
   <!-- Manufacturers Table -->
  <div class="container mt-5">
  <h4 class="mb-4 text-center text-primary fw-bold border-bottom pb-2">All Manufacturers</h4>
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
  <a href="all-in-one.php" class="btn btn-secondary mt-3">⬅ Back</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>