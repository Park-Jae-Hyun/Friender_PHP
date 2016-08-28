<?php
$con=mysqli_connect("127.0.0.1","root","wogus","db_friender");  
mysqli_set_charset($con,"utf8");
  
if (mysqli_connect_errno($con))  
{  
   echo "Failed to connect to MySQL: " . mysqli_connect_error();  
}  

$user_u_id = $_POST['user_u_id'];
 
$sql = "SELECT id,num_bulletin,destination,writer,sub_route1,sub_route2,date,finding_friends,joined_friends,character1,character2,character3,text FROM Travel_Info WHERE `id`='".$user_u_id."';";

$result = mysqli_query($con, $sql);
$total_record = $result->num_rows; 
 
$result_array = array();

for( $i = 0; $i <$total_record; $i++) {
	$result->data_seek($i);
	
	$row = $result->fetch_array();
	$row_array = array(
	"id"=>$row[0],"num_bulletin"=>$row[1],"destination"=>$row[2],"writer"=>$row[3],"sub_route1"=>$row[4],"sub_route2"=>$row[5],"date"=>$row[6],"finding_friends"=>$row[7],"joined_friends"=>$row[8],"character1"=>$row[9],"character2"=>$row[10],"character3"=>$row[11],"text"=>$row[12]
	);
	array_push($result_array,$row_array);
}
echo json_encode(array("post_data"=>$result_array));
mysqli_close($con);
?>
