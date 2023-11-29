<?php 

class Encapsulation {

protected $num;

function __construct(){
$this->num=1;
}

function getNum(){
return $this->num;

}

}
$obj=new Encapsulation();

echo $obj->getNum();


?>


