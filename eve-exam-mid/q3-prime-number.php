<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number</title>
</head>

<body>
    <form method='post'>
        <h4>Find Out the Prime Number</h4>
        Enter a number: <input type="text" name="fname">

        <input type="submit" name="submit">
    </form>
    <?php
    $p = $_POST["fname"];
    $isPrime = true;
    if ($_POST["submit"]) {
        if ($p == 0 || $p == 1) {
            echo "<script>alert('$p is Not a Prime or Composite')</script>";
            exit();
        }
        for ($i = 2; $i < $p; $i++) {
            if ($p % $i == 0) {
                $isPrime = false;
                break;
            }
        }
        if ($isPrime){
            echo "<script>alert('$p is a Prime Number')</script>";
            //echo "$b prime number";
            } else{
            echo "<script>alert('$p is NOT a Prime Number')</script>";
            }
    }
    ?>

</body>

</html>