<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee_data_management";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// PRG pattern: insert data and redirect
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_employee'])) {

    $firstName = $conn->real_escape_string($_POST['first_name']);
    $lastName  = $conn->real_escape_string($_POST['last_name']);
    $gender    = $conn->real_escape_string($_POST['gender']);
    $salary    = (int) $_POST['salary'];

    $insert_sql = "INSERT INTO employeedemographics (FirstName, LastName, Gender)
                   VALUES ('$firstName', '$lastName', '$gender')";

    if ($conn->query($insert_sql)) {
        $emp_id = $conn->insert_id;

        $insert_salary = "INSERT INTO employeesalary (EmployeeId, Salary)
                          VALUES ($emp_id, $salary)";

        if ($conn->query($insert_salary)) {
            // Redirect to same page to prevent duplicate insert
            header("Location: ".$_SERVER['PHP_SELF']."?success=1");
            exit;
        }
    }
}

// Check if success message should be shown
$show_success = isset($_GET['success']);

// Fetch employee list
$read_sql = "
SELECT 
    ED.EmployeeId,
    ED.FirstName,
    ED.LastName,
    ED.Gender,
    ES.Salary,
    (
        SELECT COUNT(*) 
        FROM employeedemographics d 
        WHERE d.Gender = ED.Gender
    ) AS TotalGender
FROM employeedemographics ED
JOIN employeesalary ES 
ON ED.EmployeeId = ES.EmployeeId
ORDER BY ED.EmployeeId DESC
";

$result = $conn->query($read_sql);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Employee Management</title>
<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">Employee Management</a>
  </div>
</nav>

<div class="container">

<!-- Add Employee Form -->
<div class="card mb-4 shadow-sm">
  <div class="card-header bg-primary text-white">Add New Employee</div>
  <div class="card-body">
    <form method="POST">
      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label">First Name</label>
          <input type="text" name="first_name" class="form-control" required>
        </div>
        <div class="col-md-6">
          <label class="form-label">Last Name</label>
          <input type="text" name="last_name" class="form-control">
        </div>
        <div class="col-md-6">
          <label class="form-label">Gender</label>
          <select name="gender" class="form-select" required>
            <option value="">Select</option>
            <option>Male</option>
            <option>Female</option>
          </select>
        </div>
        <div class="col-md-6">
          <label class="form-label">Salary</label>
          <input type="number" name="salary" class="form-control" min="1000" required>
        </div>
      </div>
      <button type="submit" name="submit_employee" class="btn btn-primary mt-3">Save Employee</button>
    </form>
  </div>
</div>

<!-- Employee List -->
<div class="card shadow-sm">
  <div class="card-header bg-primary text-white">Employee List</div>
  <div class="card-body table-responsive">
    <table class="table table-striped table-hover align-middle">
      <thead>
        <tr>
          <th>SL</th>
          <th>Name</th>
          <th>Gender</th>
          <th>Salary</th>
          <th>Total Gender</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sl = 1;
        if($result){
          while($row = $result->fetch_assoc()){
            echo "<tr>
              <td>{$sl}</td>
              <td>{$row['FirstName']} {$row['LastName']}</td>
              <td>{$row['Gender']}</td>
              <td>$".number_format($row['Salary'])."</td>
              <td>{$row['TotalGender']}</td>
            </tr>";
            $sl++;
          }
        }
        ?>
      </tbody>
    </table>
  </div>
</div>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- SweetAlert2 Success -->
<?php if($show_success): ?>
<script>
Swal.fire({
  icon: 'success',
  title: 'Employee added successfully!',
  showConfirmButton: false,
  timer: 1800
});
</script>
<?php endif; ?>

</body>
</html>
