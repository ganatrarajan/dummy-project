<?php
// class and function in oop
class class1{
    public $x = 1;
    function fun1(){
        return $this->x++;
    }
}

$obj1 = new class1();
$obj2 = new class1();

$obj1->fun1();
echo $obj1->x;

echo "</br>";

echo $obj2->x;

?>