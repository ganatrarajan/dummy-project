 <!-- Abstract class contains atleast 1 abstract function -->
 <!--  Abstract class could not create object -->
 <!-- Abstract function - must declare but not implement-->
 <!-- Abstract class, child class must contain abstract function -->

 <?php
abstract class bank{
    abstract function id_proof();
    
}
// $obj = new bank();
class hdfc extends bank{
    function id_proof(){
        echo "test";
    }
}

class icic extends bank{
    function id_proof(){
        echo "test";
    }
}


?>