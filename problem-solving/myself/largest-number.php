<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find the Largest Number</title>
</head>

<body>
    <form method="post">
        <h3>Find the Largest Number</h3><br>
        Enter the 1st number: <input type="number" name="first"><br><br>
        Enter the 2nd number: <input type="number" name="second"><br><br>
        Enter the 3rd number: <input type="number" name="third"><br><br>
        <input type="submit" name="submit">
    </form>

    <?php
    function findLargestNumber($a, $b, $c)
    {
        $largest = null;

        if ($a > $b && $a > $c) {
            $largest = $a;
        }

        if ($b > $a && $b > $c) {
            $largest = $b;
        }

        if ($c > $a && $c > $b) {
            $largest = $c;
        }

        return $largest;
    }
    if (isset($_POST['submit'])) {
        $a = $_POST['first'];
        $b = $_POST['second'];
        $c = $_POST['third'];

        $result = findLargestNumber($a, $b, $c);
        echo "<script>alert('The largest number among $a, $b, and $c is: $result')</script>";
    }
    ?>
</body>

</html>