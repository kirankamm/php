<?php

require_once('config.php');

if(isset($_POST['userName'])){
  
  //$id='';
$name=$_POST['userName'];
$mobile=$_POST['user_moNumber'];
$email=$_POST['user_email']; 
$password=$_POST['user_password'];
//$date='';

$stmt=$db->prepare("INSERT INTO user_details (name,mobile,email,password) VALUES (:name,:mobile,:email,:password)");
$stmt->execute(array(':name'=>$name,':mobile'=>$mobile,':email'=>$email,':password'=>$password));

//echo 'data row inserted!';

header('Location: php-registor.html?form-submited');  


}else{
    
    header('Location: php-registor.html?form-submited-fail');
       
       }

$db = null;

?>

