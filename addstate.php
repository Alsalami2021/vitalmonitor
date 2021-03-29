
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
					<h1>Add Patient Status</h1>
					<hr>
	<form action="addstate.php" method="post">
		<select class="form-control" name="n">
			<?php
			include'conn.php';
			$t=mysqli_query($con,"select * from patient ");
			while($row=mysqli_fetch_array($t))
			{
				echo'
<option value="'.$row['id'].'">'.$row['name'].'</option>
				';
			}
			?>
		</select><br>
		<input type="text" class="form-control" name="h" placeholder="heart rate"><br>
		<input type="text" class="form-control" name="s" placeholder="Current state"><br>
		

		<input type="text" class="form-control" name="lat" placeholder="lattiude"><br>

		<input type="text" class="form-control" name="lan" placeholder="langtitude"><br>

		<input type="text" class="form-control" name="temp" placeholder="Temperture"><br>

		<input type="text" class="form-control" name="pre" placeholder="Presure"><br>

<br>

<input value="Add status" type="submit" class="btn btn-primary btn-lg" name="btn">
	</form>
					
				</div>
			</div>

			<div class="col-md-3"></div>
		</div>
	</div>



<?php



$heart=isset($_POST['h'])?$_POST['h']:'';
$name=isset($_POST['n'])?$_POST['n']:'';
$ss=isset($_POST['s'])?$_POST['s']:'';
$lat=isset($_POST['lat'])?$_POST['lat']:'';
$lan=isset($_POST['lan'])?$_POST['lan']:'';
$temp=isset($_POST['temp'])?$_POST['temp']:'';
$pre=isset($_POST['pre'])?$_POST['pre']:'';


if(isset($_POST['btn']))
{

	$result=mysqli_query($con,"insert into 
	status(pid,heart,state,lat,lan,temp,presur)
	values('$name','$heart','$ss','$lat','$lan','$temp','$pre')");


	if(isset($result))
	{
		echo'<script>alert("add Status done");</script>';
	}
	else{
		echo'<h1 class="alert alert-danger">add Status failed</h1>';

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