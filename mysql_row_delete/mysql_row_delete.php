
<?php
require_once('config.php');


$name='mandar';
$date='2023-07-21 23:33:44';

$stmt=$db->prepare("DELETE FROM user_details where name=:name AND date=:date");
$stmt->bindValue(':name',$name,PDO::PARAM_STR);
$stmt->bindValue(':date',$date,PDO::PARAM_STR);

$stmt->execute();

echo 'deleted';


?>







