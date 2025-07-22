<?php
$connection = @fsockopen("127.0.0.1", 3306);

if ($connection) {
    echo "✅ Port 3306 is open and MySQL is listening.";
    fclose($connection);
} else {
    echo "❌ Port 3306 is not open!";
}
?>
