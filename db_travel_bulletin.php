<?php
$con=mysqli_connect("127.0.0.1","root","wogus","db_friender");  
mysqli_set_charset($con,"ANSI");
  
if (mysqli_connect_errno($con))  
{  
   echo "Failed to connect to MySQL: " . mysqli_connect_error();  
}  

$city = $_POST['city'];
 
$sql = "SELECT num_bulletin,destination,writer,sub_route1,sub_route2,date,finding_friends,joined_friends,character1,character2,character3,text FROM Travel_Info WHERE `city`='".$city."';";

$result = mysqli_query($con, $sql);

 
$total_record = $result->num_rows; 
$result_array = array();

for( $i = 0; $i <$total_record; $i++) {
	$result->data_seek($i);
	
	$row = $result->fetch_array();
	$row_array = array(
	"num_bulletin"=>$row[0],"destination"=>$row[1],"writer"=>$row[2],"sub_route1"=>$row[3],"sub_route2"=>$row[4],"date"=>$row[5],"finding_friends"=>$row[6],"joined_friends"=>$row[7],"character1"=>$row[8],"character2"=>$row[9],"character3"=>$row[10],"text"=>$row[11]
	);
	array_push($result_array,$row_array);
}
echo json_encode(array("travel_data"=>$result_array));
mysqli_close($con); 

?>
