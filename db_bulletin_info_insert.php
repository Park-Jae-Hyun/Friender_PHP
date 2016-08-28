<?php
$con=mysqli_connect("127.0.0.1","root","wogus","db_friender");  
mysqli_set_charset($con,"utf8");
  
if (mysqli_connect_errno($con))  
{  
   echo "Failed to connect to MySQL: " . mysqli_connect_error();  
}  
$num_bulletin = $_POST['num_bulletin']; 
$id = $_POST['user_id']; 
$name = $_POST['user_name'];  
$mobile_number = $_POST['user_mobile'];
$u_p_friends = $_POST['user_present_friends'];
$u_f_friends = $_POST['user_finding_friends'];


$num_bulletin = (int)$num_bulletin;
$id = (int)$id;
$u_p_friends = (int)$u_p_friends;
$u_f_friends = (int)$u_f_friends;
 
$renew = mysqli_query($con,"update Travel_Info set `finding_friends` = '$u_f_friends', `joined_friends` = '$u_p_friends' where `num_bulletin` = '$num_bulletin'");
 
$result = mysqli_query($con,"insert into Bulletin_Info (num_bulletin,id,name,mobile_number) values ('$num_bulletin','$id','$name','$mobile_number')");  
  
  if($result){  
    echo 'Success Join';  
  }  
  else{  
    echo 'Failure Join';  
  }  
  
mysqli_close($con);  
?> 
