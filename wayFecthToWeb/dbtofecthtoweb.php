<?php

require_once('config.php');

$stmt=$db->query("SELECT*FROM user_details LIMIT 9");
while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
    
echo $id=$row['id'] . '-'  ;
echo $name=$row['name']. '-' ;
echo $mobile=$row['mobile']. '-'  ;
echo $email=$row['email']. '-' ;
echo $password=$row['password']. '-' ;
echo $date=$row['date']. '<br/>';    
    
    
}

?>