<?php
include 'conn.php';
$username=$_POST['username'];
$password=$_POST['password'];
$section=$_POST['section'];
$address=$_POST['address'];

$r=mysqli_query($con,"insert into doctor(name,section,address,password)values('$username','$section','$address','$password')");
if(issets($r)  )
{
	$arr['f']=true;
}

else{
	$arr['f']=false;
}
echo json_encode($arr);
?>