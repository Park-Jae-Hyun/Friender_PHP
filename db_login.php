<?php
error_reporting(0);
$con=mysqli_connect("127.0.0.1","root","wogus","db_friender");  
mysqli_set_charset($con,"ANSI");
  
if (mysqli_connect_errno($con))  
{  
   echo "Failed to connect to MySQL: " . mysqli_connect_error();  
}


$email = $_POST["id"];
$password = $_POST["password"];
$sql = "SELECT * FROM Person_Info WHERE `email`='".$email."' AND `password`='".$password."';";
$result = mysqli_query($con, $sql);

$response = array();
while($row = mysqli_fetch_array($result)){
	$response=array("user_unique_id"=>$row[0],"f_name"=>$row[1],"l_name"=>$row[2],"email"=>$row[3],"password"=>$row[4],"sex"=>$row[5],"birth"=>$row[6],"mobile_number"=>$row[7]);
}
echo json_encode(array("user_data"=>$response));
mysqli_close($con);
?>
