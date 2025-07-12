<?php
$email = "assad.uz255@gmail.com";
if (preg_match("/^[a-zA-Z0-9.-_%]+@[a-zA-Z0-9]+\.[a-z]{2,}$/", $email)){
    echo "Your e-mail is valid!";
}else{
    echo "Invalid e-mail! Enter a valid e-mail.";
}
echo "<br>";
?>

<?php
$email2 = "assad.uz255@gmailcom";
if (preg_match("/^[a-zA-Z0-9.-_%]+@[a-zA-Z0-9]+\.[a-z]{2,}$/", $email2)){
    echo "Your e-mail is valid!";
}else{
    echo "Invalid e-mail! Enter a valid e-mail.";
}
?>