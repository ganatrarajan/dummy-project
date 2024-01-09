<?php

// class class1{
//     protected $num;
//     function  __construct(){
//   $this->num=1;

//     }
//     function getNum(){
//         return $this->num;
//     }
    
// }
// $obj = new class1();
// // $obj->num=2;
// echo $obj->getNum();


// public > protected > private

class class1{
    private $num;
    function  __construct(){
    //$this->num=1;
    }
    protected function getdata1(){
        echo "parent function";
    }
    
}
class class2 extends class1{
    // function getNum(){
    //     return $this->num;
    // }

    //  function getdata(){
    //     $this->getdata1();
    // }

    function getdata(){
           echo "child function";  //it is applicable for only both are public
                                    // or parent is protected or child are public.
        }
}
$obj = new class2();
echo $obj->getdata();
?>