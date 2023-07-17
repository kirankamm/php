<?php

if(isset($_POST['post_submit'])){ 

$user_Name=$_POST['userName'];
$user_MoNum=$_POST['moNumber'];
$user_Email=$_POST['email'];




echo 'Name :'.$user_Names.'<br/>';
echo 'MoNum :'. $user_MoNum.'<br/>';
echo 'Email :'. $user_Email.'<br/>';


}else{
    
    echo 'nothing is there!';
}

?>