
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
	<?php
include'adminnav.php';
	?> 


	<div class="container">
		<div class="mydiv col-md-5 col-md-offset-7" >
			<h1>Admin DashBoard <i style="color: lightblue;font-size: 60px;" class="fa fa-dashboard"></i></h1>
			<hr>
			<h3>Manage Your Site & Save Life</h3>
		</div>
	</div>










<script type="text/javascript" src="js/jQuery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
<?php 
ob_end_flush();

?>