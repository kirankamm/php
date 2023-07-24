<?php 
$id = $_GET['id'] ;
$name = $_GET['name'] ;
$mobile = $_GET['mobile'] ;

?>

<!DOCTYPE HTML>
<html>

<head>
<title> hi </title>
</head>

<body>

<form action="mysql_update_html.php" method="POST">

ID: <input type="hidden" name="id" value="<?php echo $id ;?>"/><br/>
Name: <input type="text" name="name" value="<?php echo $name ;?>"/><br/>
Mobile: <input type="text" name="mobile" value="<?php echo $mobile ;?>" /><br/>

<input type="submit" value="UPDATE" />

</form>
</body>
</html>