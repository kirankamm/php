<?php

class Inheri {

function  __construct() {

    $this->num=1;
    //echo "construct1";
}

function  __fun() {
    echo "fun1";
}

}

class child extends Inheri{

    function  __construct() {
        echo "construct2 hi--";
        $this->num=2;
      parent::__construct();
      

    }
    
    function  __fun() {
        echo "fun2";
        parent::__fun();
    }

} 
 
$obj=new child();
echo $obj->num;
//$obj->__construct();
//$obj->__fun();

?>