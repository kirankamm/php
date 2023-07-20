<?php

require_once('config.php');

//$id='';
$name='somu';
$mobile='8884642500';
$email='somu@gmail.com';
$password='123456';
//$date='';

$stmt=$db->prepare("INSERT INTO users (name,mobile,email,password) VALUES (:name,:mobile,:email,:password)");
$stmt->execute(array(':name'=>$name,':mobile'=>$mobile,':email'=>$email,':password'=>$password));

echo 'data row inserted!';
$db = null;


?>