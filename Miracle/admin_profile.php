<?php 
	
	
	require ('server.php');
	
	


?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin_profile</title>
	 <link rel="icon"  href="img/logo.png">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rccg Admin</title>
	    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<script type="text/javascript" src="bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/animate.css">
        <link rel="stylesheet" type="text/css" href="css/miracle.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-12">&nbsp;</div>
			<div class="col-md-4 col-sm-4 col-xs-12"><br>
				<img class=" rounded mx-auto d-block" src="img/logo.png">
				<h1 class="text-center">Welcome, <?php if (isset($_SESSION['username'])) {
					echo $_SESSION['username'];
				}; ?></h1><br>
				<h2 class="text-center">Here are your Details</h2> <br>
				<p class="text-center ad_det">	username: <b><?php if (isset($_SESSION['username'])) {
					echo $_SESSION['username'];
				}?></b> <br>
					Password: <b><?php if (isset($_SESSION['password'])) {
						echo $_SESSION['password'];
					} ?></b>
				</p><br>
				<div class="text-center">
					<label>Edit Profile:</label><br>
					<a href="admin_editprofile.php?edita=<?php echo $_SESSION['id'];  ?>" class=" text-center btn btn-info" target="_blank">Edit Profile</a>
				</div><br>
				<div class="text-center">
					<a href="holyspirit.php">Back</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">&nbsp;</div>
		</div>
	</div>

</body>
</html>