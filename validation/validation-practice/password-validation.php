<?php
$password = "MyPass@123";

// if (preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/', $password)) { standard version
if (preg_match('/^[A-Za-z0-9]{8,}$/', $password)) {
    echo "✅ Strong password!";
} else {
    echo "❌ Weak password. Please use A-Z, a-z, 0-9 & special character!";
}
?>
