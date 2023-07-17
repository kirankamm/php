

<?php

if(isset($_POST['post_submit'])){ 

$user_Name=$_POST['userName'];
$user_MoNum=$_POST['moNumber'];
$user_Email=$_POST['email'];
$user_gender=$_POST['gender'];
$user_checkbox=$_POST['agree'];



echo 'Name :'.$user_Name.'<br/>';
echo 'MoNum :'. $user_MoNum.'<br/>';
echo 'Email :'. $user_Email.'<br/>';
echo 'Gender :'. $user_gender.'<br/>';



if(isset($_POST['agree'])){

echo 'Checkbox'. $user_checkbox.'<br/>';

}

}else{
    
    //echo 'nothing is there!';
}


echo $_SERVER['PHP_SELF'];

?>



<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />

	<title>Email Creation</title>
</head>

<body>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>"method="post">
    
Name :<input type="text" name="userName" /> <br/>
MobNumber :<input type="number" name="moNumber" /> <br/>
Email :<input type="email" name="email" /><br/>

Gender :
<br />
<label>
<input type="radio" name="gender" value="Male"  checked=""/>Male
</label>

<label>
<input type="radio" name="gender" value="Female" />Female
</label>

<label>
<input type="radio" name="gender" value="Other" />Other
</label>

<br />

<label>
<input type="checkbox" name="agree" value="Other" />Agree The Terms And Conditions
</label>
<br/>

<input type="submit" name="post_submit" />
</form>

</body>
</html>