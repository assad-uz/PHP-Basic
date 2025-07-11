<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($num)){
        $n = $num+5;
        echo $r;
    } else {
        echo "False";
    }
    var_dump(isset($num));
    echo '<br>';
    echo '<br>';
    ?>

    <?php
    if(isset($n)){
        $n = 15;
        $result = $n+5;
        echo $result;
    } else {
        echo "False";
    }
    var_dump(!isset($num));
    echo '<br>';
    echo '<br>';
    
    ?>


    <?php 
    // Ex:1
$name = "Assad";
if (isset($name)) {
    echo "Variable set ache";
}
// Output: Variable set ache
    echo '<br>';
    echo '<br>';

?>

<?php
    // Ex:2 NULL হলে false
$age = NULL;
if (isset($age)) {
    echo "Set"; //jodi True hoto tahole eti print hoto
} else {
    echo "Not Set"; //jehetu False tai eti print hoyeche
}
// Output: Not Set
    echo '<br>';
    echo '<br>';

?>

<?php
// Ex:3 (Unset variable)
if (isset($x)) {
    echo "Set";
} else {
    echo "Not Set";
}
// Output: Not Set (কারণ $x define-ই করা হয়নি)
    echo '<br>';
    echo '<br>';

?>

<?php
// Ex:4.1 (একাধিক ভ্যারিয়েবল চেক:)
$a = 10;
$b = 20;
if (isset($a, $b)) {
    echo "Both set ache";
}
    echo '<br>';
    echo '<br>';
// Output: Both set ache
?>

<?php
// Ex:4.2 (একাধিক ভ্যারিয়েবল চেক:)
$a = 10;
$b = 20;
if (isset($a, $b, $c)) {
    echo "Both set ache";
} else{
    echo "Something not set";
}
    echo '<br>';
    echo '<br>';
// Output: Something not set
?>

<?php
// Ex:4.3 (একাধিক ভ্যারিয়েবল চেক:)
$a = 10;
$b = 20;
$c = NULL;
if (isset($a, $b, $c)) {
    echo "Both set ache";
} else{
    echo "Something not set";
}
// Output: Something not set
?>


</body>
</html>