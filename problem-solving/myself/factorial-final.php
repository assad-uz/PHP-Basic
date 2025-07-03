<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Calculator</title>
</head>
<body>
    <form method="post">
        Enter the number: <br>
        <input type="number" name="fNum" required><br><br>
        <input type="submit" name="submit">
    </form>

    <?php
    function calculateFactorial($n) {
        $fact = 1;
        for ($i = 1; $i <= $n; $i++) {
            $fact *= $i;
        }
        return $fact;
    }
    if (isset($_POST["submit"])) {
        $num = $_POST["fNum"];
        $result = calculateFactorial($num);
        echo "<script>alert('The factorial value of $num is $result.')</script>";
    }
    ?>
</body>
</html>
