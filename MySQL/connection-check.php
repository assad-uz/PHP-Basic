<?php
// PHP-MySQL Connection Check

$connt= mysqli_connect("localhost","root","","e_commerce");
$sql= "INSERT INTO users (name,email,contact) VALUES ('Assaduzzaman', 'assad@example.com','01515-255259')";

if (mysqli_query($connt, $sql)) {
    echo "Query is running successfully.";
} else {
    echo "Error: " . mysqli_error($connt);
}
?>