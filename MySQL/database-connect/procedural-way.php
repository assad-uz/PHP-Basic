<?php 
$conn = mysqli_connect("localhost","root","", "new_database");

if(!$conn){
    die("Connection Failed.");
}
echo "connection successfull"
?>