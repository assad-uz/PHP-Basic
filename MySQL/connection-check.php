<?php
// PHP-MySQL Connection Check

if (mysqli_query($connt, $sql)) {
    echo "Query is running successfully.";
} else {
    echo "Error: " . mysqli_error($connt);
}
?>