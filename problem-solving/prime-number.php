<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="get">
    Enter a number: <input type="number" name="number">
    <input type="submit" value="Check Prime">
</form>

<?php
if (isset($_GET['number'])) {
    $num = $_GET['number'];

    function isPrime($n) {
        if ($n <= 1) return false;
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) return false;
        }
        return true;
    }

    echo isPrime($num) ? "$num is a Prime Number" : "$num is NOT a Prime Number";
    }

?>

</body>
</html>