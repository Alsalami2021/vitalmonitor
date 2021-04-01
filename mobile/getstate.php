<?php
include 'conn.php';
$id=$_POST['id'];


$r1=mysqli_query($con,"select * from status where pid='$id'");
if(mysqli_num_rows($r1) > 0 )
{
	$r=mysqli_fetch_array($r1);
	
	$arr['ss']=$r['state'];
	
}


echo json_encode($arr);
?>
