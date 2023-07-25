<?php

require_once('config.php');

$search='7';

$stmt=$db->prepare("SELECT * FROM user_details WHERE mobile LIKE ?  ");
$stmt->bindValue(1,"%$search%",PDO::PARAM_STR);
//  $stmt->bindValue(2,"%$search%",PDO::PARAM_STR);

$stmt->execute();

?>

<table>
<thead>
<tr>
<th>ID</th>
<th>NAME</th>
<th>MOBILE</th>
<th></th>
</tr>
</thead>



<?php
while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
    
 $id=$row['id']  ;
 $name=$row['name'];
 $mobile=$row['mobile'];

//echo $email=$row['email']. '-' ;
//echo $password=$row['password']. '-' ;
//echo $date=$row['date']. '<br/>'; 

?>

<tr>
<td><?php echo $id; ?></td>
<td><?php echo $name; ?></td>
<td><?php echo $mobile; ?></td>
<td>
<a href="mysql_select_byhtml_form.php?id=<?php echo $id; ?>&name=<?php echo $name; ?>&mobile=<?php echo $mobile; ?>">Edit</a>
</td>
</tr>


<?php
}
?>

</tbody>
</table>