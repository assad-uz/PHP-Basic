<?php 
session_start();
unset($_SESSION['start']);
session_destroy();
header("Location: login.php");
exit;
?>
