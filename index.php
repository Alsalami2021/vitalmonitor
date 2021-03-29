
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


	<style type="text/css">
		.mydiv{
			margin-top: 130px;
			
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
background-repeat: no-repeat;background-size: cover;width: 100%;height: 100%">



	<div class="container">
		<div class="mydiv col-md-5 col-md-offset-7" >
			<h1>Welcome To Our Site </h1>
			
			<hr>
			<h3>Manage Your Health & Save Life</h3>

			<a href="#" class="btn btn-info btn-lg"> Download Our App</a>
			<a href="log.php" class="btn btn-warning btn-lg"> Admin LogIn</a>
		</div>
	</div>










<script type="text/javascript" src="js/jQuery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
<?php 
ob_end_flush();

?>