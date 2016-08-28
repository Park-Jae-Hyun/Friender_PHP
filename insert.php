<?php  
$con=mysqli_connect("127.0.0.1","root","wogus","db_friender");
mysqli_set_charset($con,"utf8");
  
if (mysqli_connect_errno($con))  
{  
   echo "Failed to connect to MySQL: " . mysqli_connect_error();  
}  
$f_name = $_POST['f_name'];  
$l_name = $_POST['l_name'];  
$email = $_POST['email'];
$password = $_POST['password'];
$sex = $_POST['sex'];
$birth = $_POST['birth'];  
$mobile_number = $_POST['mobile_number'];
  
$result = mysqli_query($con,"insert into Person_Info (f_name,l_name,email,password,sex,birth,mobile_number) values ('$f_name','$l_name','$email','$password','$sex','$birth','$mobile_number')");  
  
  if($result){  
    echo 'success';  
  }  
  else{  
    echo 'failure';
  }  
  
  
mysqli_close($con);  
?>
