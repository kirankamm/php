<?php

class class1{


function __construct(){
  $x=10;

}
 
function method(){
 return $this->x;
}

function __destruct(){
 echo "end";
    
}

}
$obj1=new class1();
$obj1->method();

?>