<?php 
$hostname = "localhost";
$user = "root";
$password = "";
$dbname = "car";
$conn = new mysqli($hostname, $user, $password, $dbname);

if($conn->connect_error){
    die ("Connection Failed.".$conn->connect_error);
}
echo "connection successful";
?>
<div> 
    <h3 style="text-align: center;">Car Information</h3>
    <table border="1" style="width: 50%; border-collapse: collapse; margin: 20px auto; font-family: Arial, sans-serif;"> 
        <tr> 
        <th>ID</th>
        <th>Brand</th>
        <th>Model</th>
        <th>CC</th>
        </tr>
    
    <?php 
    $users = $conn->query("select * from users");
    while (list($_id, $_brand, $_model,$_cc) = $users->fetch_row()){
        echo "
        <tr>
        <td>$_id</td>
        <td>$_brand</td>
        <td>$_model</td>
        <td>$_cc</td>
        </tr>";
    }
    ?>
    </table>
</div>