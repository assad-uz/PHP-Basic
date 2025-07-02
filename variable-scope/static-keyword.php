<?php
class User{
    const name = "Hello World!"."<br>";
    // public static $name = "Hello World!"."<br>"; (uporer line r ei line same)
    public static function info(){
        echo "This is a static method.<br>";
    }
}

echo User::info();
echo User::name;
