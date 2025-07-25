<?php 
$cnnt = mysqli_connect('localhost','root','','e_commerce');

if($cnnt){
    echo 'Database Connection Successful!';
}else{
    echo 'Database Connection Unsuccessful!';
}
?>