<?php 
$password = "admin1234";
//md5()
$m = md5($password);
echo $m;
echo "<br>";
echo strlen($m);

echo "<br>";
echo "<br>";

// sha1()
$m = sha1($password);
echo $m;
echo "<br>";
echo strlen($m);

echo "<br>";
echo "<br>";

// hash()
$m = hash('sha512','this is user');
echo $m;
echo "<br>";
echo strlen($m);

echo "<br>";
echo "<br>";

// base64_encode()
$m = base64_encode($password);
echo $m;
echo "<br>";
echo strlen($m);

echo "<br>";
echo "<br>";

// base64_decode()
$m = base64_decode('YWRtaW4xMjM0');
echo $m;
echo "<br>";
echo strlen($m);

?>
