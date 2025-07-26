<?php
$connt = mysqli_connect('localhost','root','','e_commerce');
if(isset($_GET['deleteid'])){
    $delete_id = $_GET['deleteid'];
    $sql = "DELETE FROM users WHERE id=$delete_id";
    if(mysqli_query($connt,$sql)==true){
        header('location: delete.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Users Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow p-4" style="width: 100%; max-width: 800px;">
            <h4 class="mb-4 text-center">Users Contact List</h4>

            <table class="table table-bordered table-hover text-center">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $user = $connt->query("SELECT * FROM users");
                    while(list($_id,$_name,$_email,$_contact) = $user->fetch_row()){
                        echo "<tr>
                                <td>$_id</td>
                                <td>$_name</td>
                                <td>$_email</td>
                                <td>$_contact</td>
                                <td>
                                    <a href='update.php?id=$_id'>Delete</a> | 
                                    <a href='delete.php?deleteid=$_id'>Delete</a>
                                </td>
                              </tr>";
                    }
                    ?>
                </tbody>
            </table>

            <div class="text-end mt-3">
                <a href="insert.php" class="btn btn-primary">Insert Data</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
