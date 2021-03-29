<?php
include 'conn.php';
$username=$_POST['username'];

$address=$_POST['address'];

$r=mysqli_query($con,"insert into demond(name,address)values('$username','$address')");
if(issets($r)  )
{
	$arr['f']=true;
}

else{
	$arr['f']=false;
}
echo json_encode($arr);
?>