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
			<h1 class="text-center">Manage Request from app </h1>


	<form action="ar.php" method="post">  
		<div class="text-center" >
		<input type="text" style="width: 30%;display: inline;" placeholder="Key To Search For" class="form-control" name="se">

	<input type="submit" class="btn btn-primary" style="width: 20%; display: inline;" value="Search" name="sebtn">	
	</div>
	</form>	
		</div>

		




		<table class="table table-bordered">
			<tr>
				<th>ID</th>
				<th>Patinet name</th>
				<th>Address</th>
			
				
			</tr>


			<?php

			include'conn.php';

$word=isset($_POST['se'])?$_POST['se']:'';

			if(isset($_POST['sebtn']))
			{



	$q=mysqli_query($con,"select * from demond
		where name like'%".$word."%' or address like'%".$word."%'  ");
	while($row=mysqli_fetch_array($q))
	{
		echo'

		<tr>
			<td>'.$row['id'].'</td>
			<td>'.$row['name'].'</td>
			<td>'.$row['address'].'</td>
				

		</tr>



		';

	}












			}

			else{


	$q=mysqli_query($con,"select * from demond");
	while($row=mysqli_fetch_array($q))
	{
		echo'

	<tr>
			<tr>
			<td>'.$row['id'].'</td>
			<td>'.$row['name'].'</td>
			<td>'.$row['address'].'</td>
				

		</tr>
		</tr>



		';

	}

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