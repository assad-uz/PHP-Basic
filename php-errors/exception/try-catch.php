<?php
$a = 10;

try{
    if ($a<30){
        throw new Exception ("valid number");
    } else {
        throw new Exception("invalid number");
    }
}
catch(Exception $e){
    echo "Your error is: ".$e->getMessage()."<br>";
}
finally{
    echo "This is finally done my work";
}