<?php

class class1{
    function __construct(){
        $this->num=1;
        // echo "constructer1";
    }
    function fun1(){
        echo "fun1";
    }
}

class class2 extends class1{
    
    function __construct(){
        parent:: __construct();
        $this->num=2;  
        echo "constructer2";
        
    }
}

$obj = new class2();
// $obj->fun1();
echo $obj->num;

?>