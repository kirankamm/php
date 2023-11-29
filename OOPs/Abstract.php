<?php

abstract class Bank{

   abstract function id();

}

class Sbi extends Bank{

function text(){
echo "creadited amount in SBI";
}

}

class Kvg extends Bank{

    function text(){
    echo "creadited amount in KVG";
    }
    
    }


?>