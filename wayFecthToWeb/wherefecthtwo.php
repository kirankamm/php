<?php
require_once('config.php');
$user_id=1;
$user_name='somu';
$user_mobile=8884642500;
$user_email=1;
$user_password=1;


$stmt=$db->query("
SELECT*FROM 
user_details
 where name='$user_name' AND mobile='$user_mobile'");
while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
    
echo $id=$row['id'] . '-'  ;
echo $name=$row['name']. '-' ;
echo $mobile=$row['mobile']. '-'  ;
echo $email=$row['email']. '-' ;
echo $password=$row['password']. '-' ;
echo $date=$row['date']. '<br/>'; 


}
?>