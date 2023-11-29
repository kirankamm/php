<?php

class Protct{

protected function getData(){
    echo "hello";
}

}
class gtData extends protct{

     function getData(){
    echo "hello";
    } 

}

$obj=new gtData();
$obj->getData();


?>