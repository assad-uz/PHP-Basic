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
          <input type="text" class="form-control" id="name" name="name" required>
        </div> 

        <div class="mb-3">
          <label for="price" class="form-label">Price:</label>
          <input type="text" class="form-control" id="price" name="price" required>
        </div>

<div class="mb-3">
  <label class="form-label">Manufacturer</label>
  <select class="form-select" name="manufacture_id" required>
    <?php 
      $manufac = $db->query("SELECT * FROM manufacturer");
      while(list($_mid, $_mname) = $manufac->fetch_row()) {
        echo "<option value='$_mid'>$_mname</option>";
      }
    ?>
  </select>
</div>        
        <button type="submit" class="btn btn-primary w-100" name="submit">Submit</button>
      </form>
    </div>
  </div>

  <!-- after delete trigger -->
<form action="#" method="post">
    Manufacturer: 
    <select name="manufacture_id" required>
        <?php 
        $result = $db->query("SELECT * FROM manufacturer");
        while(list($id, $name) = $result->fetch_row()){
            echo "<option value='$id'>$name</option>";
        }
        ?>
    </select><br>
    <input type="submit" name="delmanufact" value="Delete">
</form>

   

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
