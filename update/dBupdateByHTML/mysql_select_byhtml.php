<style type="text/css">
th{
background:silver;

} 
td{
padding:5px;
border:1px solid silver;

}
</style>


<?php
require_once('config.php');

$stmt=$db->query("SELECT id,name,mobile FROM user_details");
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