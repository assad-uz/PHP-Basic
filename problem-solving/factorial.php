<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        Enter a number: <input type="number" name="num" required>
        <input type="submit" value="Calculate Factorial">
    </form>

    <?php
        if (isset($_GET['num'])) {
            $num = $_GET['num'];


        function factorial($n) {
        if ($n <= 1) {
            return 1;
        } else {
            return $n * factorial($n - 1);
            }
        }

        echo factorial($num);

        if ($num < 0) {
            echo "Factorial is not defined for negative numbers.";
            } else {
            echo "<br>"."Factorial of $num is: " . factorial($num);
            }
    }
    ?>
</body>
</html>