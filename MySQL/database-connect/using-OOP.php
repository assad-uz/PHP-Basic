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