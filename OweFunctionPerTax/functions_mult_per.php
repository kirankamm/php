<?php

$item_amount1=100;
$item_amount2=200;
$item_amount3=300;

$Tax1=20;
$Tax2=5;
function tax_counter($item_amount,$Tax){

$Tottle_amount_discount=$item_amount * $Tax / 100 ;

return $Tottle_amount_discount; 
}

echo tax_counter($item_amount1,$Tax1);
echo"<br/>";

echo tax_counter($item_amount2,$Tax2);
echo"<br/>";

echo tax_counter($item_amount3,$Tax1);
echo"<br/>";

echo $Tottal_with_tax_amount= tax_counter($item_amount1,$Tax1)  + $item_amount1;
echo"<br/>";

echo $Tottal_with_tax_amount= tax_counter($item_amount2,$Tax2) + $item_amount2;
echo"<br/>";

echo $Tottal_with_tax_amount= tax_counter($item_amount3,$Tax1) + $item_amount3;
?>


