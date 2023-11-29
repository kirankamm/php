<?php 

class statc{

static public $num1=10;
public $num2=20;

static function hi(){

    echo self::$num1; 

}

}
echo statc::$num1;



?>