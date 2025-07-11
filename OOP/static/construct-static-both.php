<?php
// একসাথে দুই ভার্সন:

class Example {
    public $nonStaticValue = 5;
    public static $staticValue = 10;

    public function showNonStatic() {
        echo "Non-static value: $this->nonStaticValue<br/>";
    }

    public static function showStatic() {
        echo "Static value: " . self::$staticValue . "<br/>";
    }
}

$obj = new Example();
$obj->showNonStatic();   // Non-static value: 5

Example::showStatic();   // Static value: 10

?>
