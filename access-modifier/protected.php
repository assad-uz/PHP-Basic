<?php
class Animal {
    protected $type;

    function setType($type){
        $this->type = $type;
    }
    function getType(){
        return "This is $this->type";
    }
    function info(){
        return "This is parent protected method";
    }
}
class Food extends Animal{
    function getType(){
        return "This is an $this->type";
    }
}

$p = new Food();
// echo $p->type="Fruits;

$p->setType("Animals");
echo $p->getType();
echo "<br>";
echo $p->info();
?>