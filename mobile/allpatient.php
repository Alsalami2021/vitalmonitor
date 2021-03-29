<?php
include 'conn.php';


$r=mysqli_query($con,"select * from patient");

	$arr=array();
	while($row=mysqli_fetch_array($r))
	{
		$arr[]=$row;

	}




print"{all:".json_encode($arr)."}";

	



?>