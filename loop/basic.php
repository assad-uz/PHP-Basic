<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $cars = array (
        array ("BMW", "White", 2025),
        array ("Audi", "Mate Black", 2025),
        array ("Mercedise", "Red", 2025),
        array ("Lamborghini", "Yellow", 2025),
    );

    for($i = 0; $i < 4; $i++){           // i = row (গাড়ির index)
    echo "<p><b>Title $i</b></p>";  // গাড়ির নাম্বার প্রিন্ট
    for($k = 0; $k < 3; $k++){       // k = column (detail: নাম, রঙ, সাল)
        echo $cars[$i][$k]."<br>";   // গাড়ির প্রতিটি তথ্য প্রিন্ট
    }
}
?>

</body>
</html>