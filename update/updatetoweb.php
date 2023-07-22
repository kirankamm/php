<?php

require_once('config.php');
 
 $id=1;
 $name='danu' ;
 $mobile=7878787  ;
 $email='danu@gmail.com';
 $password='909090' ;
 //$date='';    
    
 $stmt=$db->prepare("UPDATE user_details SET name=?,mobile=?,email=?,password=? WHERE id=?");
  $stmt->execute(array($name,$mobile,$email,$password,$id));
  
          
echo('updated');


?>