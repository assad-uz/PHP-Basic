<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        Enter a number <br>
        <input type="number" name="fNum"> <br> <br>
        <input type="submit" name="fSubmit">
    </form>
    <?php
    $input = $_POST["fNum"];
    $isPrime = true;
    if ($_POST["fSubmit"]) {
        if ($input == 0 || $input == 1) {
            echo "Not a Prime or Composite";
            exit;
        }
        ;
        for ($i = 2; $i < $input; $i++) {
            if ($input % $i == 0) {
                $isPrime = false;
                break;
            }
        }
        ;
        if ($isPrime) {
            echo "<script>alert('$input is a Prime Number')</script>";
        } else {
            echo "<script>alert('$input is Not a Prime Number')</script>";
        }
        ;
    }
    ;
    ?>
</body>

</html>