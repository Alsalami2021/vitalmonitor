<?php 
ob_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin DashBoard</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" 
	href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color: #cecece">
	<?php
include'adminnav.php';
	?> 


	<div class="container">
		<div class="alert alert-info">
			<h1 class="text-center">Manage Cars</h1>


	<form action="mc.php" method="post">  
		<div class="text-center" >
		<input type="text" style="width: 30%;display: inline;" placeholder="Key To Search For" class="form-control" name="se">

	<input type="submit" class="btn btn-primary" style="width: 20%; display: inline;" value="Search" name="sebtn">	
	</div>
	</form>	
		</div>

		




		<table class="table table-bordered">
			<tr>
				<th>ID</th>
				<th>Driver Name</th>
				<th>Car Number</th>
				<th>Car status</th>
				
				<th>Delete</th>
				
			</tr>


			<?php

			include'conn.php';

$word=isset($_POST['se'])?$_POST['se']:'';

			if(isset($_POST['sebtn']))
			{



	$q=mysqli_query($con,"select * from car
		where driver like'%".$word."%' or name like'%".$word."%'  ");
	while($row=mysqli_fetch_array($q))
	{
		echo'

		<tr>
			<td>'.$row['id'].'</td>
			<td>'.$row['driver'].'</td>
			<td>'.$row['name'].'</td>
			<td>'.$row['state'].'</td>
			

			<td> <a href="mc.php?fadi='.$row['id'].'" class="btn btn-danger"> Delete</a> </td>



		</tr>



		';

	}












			}

			else{


	$q=mysqli_query($con,"select * from car");
	while($row=mysqli_fetch_array($q))
	{
		echo'

		<tr>
			<td>'.$row['id'].'</td>
			<td>'.$row['driver'].'</td>
			<td>'.$row['name'].'</td>
			<td>'.$row['state'].'</td>
			

			<td> <a href="mc.php?fadi='.$row['id'].'" class="btn btn-danger"> Delete</a> </td>



		</tr>


		';

	}

			}

































	if(isset($_GET['fadi']))
		{$xx=$_GET['fadi'];
	$ttt=mysqli_query($con,"delete from car where id='$xx'");
	if(isset($ttt))
		header("Location: mc.php");

}


			?>
		</table>
	</div>










<script type="text/javascript" src="js/jQuery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
<?php 
ob_end_flush();

?>