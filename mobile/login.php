<?php
include 'conn.php';
$username=$_POST['username'];
$password=$_POST['password'];

$r=mysqli_query($con,"select * from doctor where name='$username' and password='$password'");
if(mysqli_num_rows($r) > 0 )
{
	$arr['f']=true;
	
}

else{
	$arr['f']=false;
}
echo json_encode($arr);
?>