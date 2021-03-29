<?php
$conn=mysqli_connect("localhost","root","","sa2");
$x=$_POST['name'];
$y=$_POST['email'];
$z=$_POST['password'];
$f=$_POST['address'];


$rr=mysqli_query($conn,"insert into patient(name,email,password,address)
 values('$x','$y','$z','$f')");
if(isset($rr))
{
$arr["fb"]=true;
}

else{
$arr["fb"]=false;
}


echo json_encode($arr);
?>