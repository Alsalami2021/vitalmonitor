<?php
$conn=mysqli_connect("localhost","root","","sa2");
$y=$_POST['email'];
$z=$_POST['password'];

$tt=mysqli_query($conn,"select * from patient where email='$y' and password='$z'");

$co=mysqli_num_rows($tt);
if($co>0)
{
$arr1["f"]=true;
}
else{
$arr1["f"]=false;
}


echo json_encode($arr1);
?>