<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <h4>Find the Largest Number</h4><br>
        Enter the 1st number: <input type="number" name="first"><br><br>
        Enter the 2nd number: <input type="number" name="second"><br><br>
        Enter the 3rd number: <input type="number" name="third"><br><br>
        <input type="submit" name="submit">
    </form>
    <?php
    if (isset($_POST["submit"])) {
        $a = $_POST["first"];
        $b = $_POST["second"];
        $c = $_POST["third"];

        $result = findLN($a, $b, $c);
        echo "<script>alert('The largest number among $a, $b and $c is $result')</script>";
    }
    function findLN($a, $b, $c)
    {
        $largest = null;
        if ($a > $b && $a > $c) {
            $largest = $a;
        }
        if ($a < $b && $b > $c) {
            $largest = $b;
        }
        if ($c > $a && $b < $c) {
            $largest = $c;
        }
        return $largest;
    }
    ?>
</body>

</html>