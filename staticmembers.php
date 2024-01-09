<?php
class class1{
    static public $num=10;
    public $num2 = 20;
    static function fun(){
        echo self::$num++;
    }
}
 class1::fun();
echo class1::$num;


?>