<?php

class Privat { 

    private $num;

 function getData(){
$this->num=1;
}

}

class GtPrivate extends Privat{

     function getData(){
        return $this->num;

    }
}

$obj=new GtPrivate();
echo $obj->getData();



?>