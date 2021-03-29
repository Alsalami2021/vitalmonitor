<?php
session_start();
ob_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>test db</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	
</head>
<body>


	<div class="container">
		<div style="height: 100px;">  </div>
		
		<div class="row">

			<div class="col-md-3"></div>

			<div class="col-md-6">
				<div class="panel panel-primary">
			<div class="panel-heading">
				<h1 class="text-center text-uppercase">Log In To Admin Dashboard </h1>
			</div>

			<div class="panel-body">
		<form action="log.php" method="post">
		<input type="text" placeholder="enter email" class="form-control" name="e"><br>




		<input type="password" placeholder="enter password"  class="form-control" name="p"><br>


		<input type="submit" value="SignIn" class="btn btn-primary btn-lg" name="bt">
		
		</form>
			</div>

			<div class="panel-footer"></div>

		</div>
			</div>

			<div class="col-md-3"></div>
			




		</div>


	</div>

<?php

include'conn.php';

$x=isset($_POST['e'])?$_POST['e']:'';
$y=isset($_POST['p'])?$_POST['p']:'';


if(isset($_POST['bt']))
{
	
		if($x=="admin" & $y=="admin")

		header("Location: admin.php");

	
	else{
		echo'<h1 class="alert alert-danger">email or password worng</h1>';

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