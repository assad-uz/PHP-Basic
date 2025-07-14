<?php 
// All New
session_start();
unset($_SESSION['start']);
session_destroy();
header("Location: first-page.php");
?>