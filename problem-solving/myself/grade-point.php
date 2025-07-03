<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Grade Checker</title>
</head>
<body>
    <form method="post">
        Enter the number: <br>
        <input type="number" name="fNum" required><br><br>
        <input type="submit" name="submit">
    </form>

    <?php
    function getGrade($score) {
        $grade = ""; 

        if ($score >= 90) {
            $grade = "A";
        } elseif ($score >= 80) {
            $grade = "B";
        } elseif ($score >= 70) {
            $grade = "C";
        } elseif ($score >= 60) {
            $grade = "D";
        } else {
            $grade = "F";
        }

        return $grade;
    }

    if (isset($_POST['submit'])) {
        $score = $_POST["fNum"];
        $result = getGrade($score);
        echo "<script>alert('The grade for a score of $score is: $result');</script>";
    }
    ?>
</body>
</html>
