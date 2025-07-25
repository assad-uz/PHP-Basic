<?php
// PHP-MySQL Connection Check
$n = "Assaduzzaman";
$e = "assad@example.com";
$c = "01515-255259";

$connt= mysqli_connect("localhost","root","","e_commerce");
$sql= "INSERT INTO users (name,email,contact) VALUES ('$n','$e','$c')";

if (mysqli_query($connt, $sql)) {
    echo "Query is running successfully.";
} else {
    echo "Error: " . mysqli_error($connt);
}
?>