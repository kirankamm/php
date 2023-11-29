<?php

class numberFecth{

public $x=10;
public $y=20;

function construct(){
  echo $this->x++;

}
 

function method(){
    return $this->y;
   }
   

}
$obj1=new numberFecth();
$obj1->construct();
echo $obj1->method();


?>