<?php
include 'conn.php';
$username=$_POST['username'];
$phone=$_POST['phone'];
$age=$_POST['age'];
$address=$_POST['address'];

$r=mysqli_query($con,"insert into patient(name,phone,address,age)values('$username','$phone','$address','$age')");
if(issets($r)  )
{
	$arr['f']=true;
}

else{
	$arr['f']=false;
}
echo json_encode($arr);
?>