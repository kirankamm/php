<?php
require_once('config.php');

$user_id=3;
$user_name='shiva kumar';
$user_mobile=778899;
$user_email='shivakumar@123';
$user_password='0909090';

$stmt=$db->prepare("UPDATE user_details SET name=?,mobile=?,email=?,password=? WHERE id=?");

$stmt->execute(array($user_name,$user_mobile,$user_email,$user_password,$user_id ));


echo 'particuler data updated'; 

?>








