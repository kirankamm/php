
<select name="day">

<?php
$start=31;
$stop=1;

while($start>=$stop){
    
   $day=$start-- ;
     
     
     
     echo '<option value="'.$day.'">'.$day.'</option>';   
}
?>




</select>

<select name="month">

<?php
$start=12;
$stop=1;

while($start>=$stop){
    
   $month=$start-- ;
     
     
     
     echo '<option value="'.$month.'">'.$month.'</option>';   
}
?>




</select>


<select name="year">

<?php
$start=2018;
$stop=2000;

while($start>=$stop){
    
   $year=$start-- ;
     
     
     
     echo '<option value="'.$year.'">'.$year.'</option>';   
}
?>




</select>


