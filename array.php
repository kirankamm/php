<?php

$array=array("one","two","three","four","five","six","seven");



echo " Belove For calculate String how much are there" .'<br/>';
echo count($array) .'<br/>';




echo " Belove For  String is there or not" .'<br/>';
if (in_array("two" ,$array )){
    
    
    echo("yes is there");
    
}else {
    
    echo("no");
    
}

echo "''". '<br/>';




echo " Belove For Fecth String" .'<br/>';


echo $array[1]; 


 

echo " Belove For Find random" .'<br/>'; 

$random=array_rand($array);

echo $array[$random];





?>