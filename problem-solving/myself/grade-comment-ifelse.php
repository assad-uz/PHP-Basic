<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Grade Checker</title>
</head>
<body>
    <form method="post">
        <h4></h4>
        Enter the Grade Value: <br>
        <input type="text" name="grade" required><br><br>
        <input type="submit" name="submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $score = $_POST["grade"];
        $comment = "";

        if ($score == "A+") {
            $comment = "Outstanding";
        } elseif ($score == "A") {
            $comment = "Very Good";
        } elseif ($score == "B") {
            $comment = "Good";
        } elseif ($score == "C") {
            $comment = "Poor";
        } else {
            $comment = "Fail";
        }

        echo "<script>alert('The Comment for the grade of $score is: $comment')</script>";
    }
    ?>
</body>
</html>
