<?php
$con=mysqli_connect("127.0.0.1","root","wogus","db_friender");  
mysqli_set_charset($con,"utf8");
  
if (mysqli_connect_errno($con))  
{  
   echo "Failed to connect to MySQL: " . mysqli_connect_error();  
}  
$id = $_POST['id'];  
$city = $_POST['city'];
$destination = $_POST['destination'];  
$writer = $_POST['writer'];
$route1 = $_POST['route1'];
$route2 = $_POST['route2'];
$date = $_POST['date'];
$finding_friends = $_POST['finding_friends'];
$joined_friends = $_POST['joined_friends'];  
$character1 = $_POST['character1'];
$character2 = $_POST['character2'];
$character3 = $_POST['character3'];
$text = $_POST['text'];

$id = (int)$id;
$date = (int)$date;
$finding_friends = (int)$finding_friends;
$joined_friends = (int)$joined_friends;
$character1 = (int)$character1;
$character2 = (int)$character2;
$character3 = (int)$character3;
  
$result = mysqli_query($con,"insert into Travel_Info (id,city,destination,writer,
sub_route1,sub_route2,date,finding_friends,joined_friends,character1,character2,
character3,text) values('$id','$city','$destination','$writer','$route1','$route2',
'$date','$finding_friends','$joined_friends','$character1','$character2','$character3'
,'$text')"); 

  if($result){  
    echo 'success';  
  }  
  else{  
    echo 'failure';  
  }  
  
 
  
mysqli_close($con);  
?> 

