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

$stmt=$db->query("SELECT cart.cart_id,items.items_name,user_details.name,items.items_price FROM cart,items,user_details  
where cart.user_id=user_details.id
AND cart.items_id=items.items_id
ORDER BY cart.cart_id ASC
");
?>

<table>
<thead>
<tr>
<th>Cart Id</th>
<th>User Id</th>
<th>Items Id</th>
<th>Items Price</th>

<th></th>
</tr>
</thead>



<?php
while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
    
 $cart_id=$row['cart_id']  ;
 $user_name=$row['name'];
 $items_name=$row['items_name'];
 $items_price=$row['items_price'];


//echo $email=$row['email']. '-' ;
//echo $password=$row['password']. '-' ;
//echo $date=$row['date']. '<br/>'; 

?>

<tr>
<td><?php echo $cart_id; ?></td>
<td><?php echo $user_name; ?></td>
<td><?php echo $items_name; ?></td>
<td><?php echo $items_price; ?></td>

<td></td>
</tr>


<?php
}
?>

</tbody>
</table>