<?php
$item_amount=100;


//$amount2=200;

function tax_counter($item_amount){

$Tottle_amount_discount=$item_amount * 10 / 100 ;

return $Tottle_amount_discount; 
}


echo tax_counter($item_amount);



?>


