<?php
class A
{
    public static $value = 34;

    function staticValue()
    {
        return self::$value;
    }

    static function show()
    {
        return "This is static value";
    }

    function applyStatic()
    {
        return self::show();
    }
}

class B extends A
{
    function xStatic()
    {
        return parent::$value;
    }
}

// $c = new A();
$c = new B();
echo $c->staticValue();
echo "<br>";
echo $c->applyStatic();
echo "<br>";
// echo $a::show();
// echo "<br>";
echo A::show();
echo "<br>";
echo $c->xStatic();
