
<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Doctor DashBoard</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" 
	href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


	<style type="text/css">
	.mydiv{
			
			
			background-color: rgba(0,40,90,0.5);
			padding:30px;
			border-radius: 10px;
			border:1px solid green;
			color: white
		}

		.mydiv h1{
			font-family: cursive;
		}


	</style>
</head>
<body style="background-image: url('images/www.jpg');
background-repeat: no-repeat;background-size: cover;">
	<?php
include'adminnav.php';
	?> 


	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>

			<div class="col-md-6">
				<div class="mydiv">
					<h1>Add New Patient</h1>
					<hr>
	<form action="addpatient.php" method="post">
		<input type="text" class="form-control" name="n" placeholder="patient name"><br>
		<input type="text" class="form-control" name="a" placeholder="age"><br>
		<input type="text" class="form-control" name="p" placeholder="phone"><br>
		

		<input type="text" class="form-control" name="s" placeholder="address"><br>

<br>

<input value="Add Patient" type="submit" class="btn btn-primary btn-lg" name="btn">
	</form>
					
				</div>
			</div>

			<div class="col-md-3"></div>
		</div>
	</div>



<?php

include'conn.php';

$age=isset($_POST['a'])?$_POST['a']:'';
$name=isset($_POST['n'])?$_POST['n']:'';

$st=isset($_POST['s'])?$_POST['s']:'';
$phone=isset($_POST['p'])?$_POST['p']:'';

$dt=date("Y-m-d");



if(isset($_POST['btn']))
{

	$result=mysqli_query($con,"insert into 
	patient(name,age,phone,address)
	values('$name','$age','$phone','$st')");


	if(isset($result))
	{
		echo'<script>alert("add Patine done");</script>';
		header("Location: mp.php");
	}
	else{
		echo'<h1 class="alert alert-danger">add Patine failed</h1>';

	}


}




?>







<script type="text/javascript" src="js/jQuery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
<?php 
ob_end_flush();

?>
