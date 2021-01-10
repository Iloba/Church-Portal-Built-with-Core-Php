<?php 
	

	require ('server.php');

	
	$username = $_SESSION['username'];
	
	if (isset($_GET['edita'])) {
		$edit_id = $_GET['edita'];

		
		$query = "SELECT * FROM login WHERE id = '$edit_id'";
		$run_query = mysqli_query($connect, $query);
		if (mysqli_num_rows($run_query) > 0) {
		 	while ($adata = mysqli_fetch_assoc($run_query)) {
		 		$id = $adata['id'];
		 		$username = $adata['username'];
		 		$password = $adata['password'];
		 		 echo "<br>";
		 		echo " <h2 class='text-center'> Welcome, $username you Can Now Edit your Profile to your Own Specification</h2>";

		 	}
		 } 
		
	}


	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		if (isset($_POST['update'])) {
			$new_username = $_POST['new_username'];
			$new_password = $_POST['new_password'];



			if (strlen($new_password) < 5) {
				$error = "Password Strenght Too Weak";
			}else{
				$query = "UPDATE login SET 
							username = '{$new_username}',
							password = '{$new_password}' ";
							$run_query = mysqli_query($connect, $query);
							if ($run_query) {
								$good = "Update Successful";
							}else{
								$error = "Update Failed Please Try Again";
							}
			}
		}
	}
	




?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin ~~ Edit _profile</title>
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
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-12">&nbsp;</div>
			<div class="col-md-4 col-sm-12 col-xs-12"><br>
				<?php 

					if (isset($error)) {
						echo "<div class='alert alert-danger text-center alt'>{$error}</div>";
					}
					if (isset($good)) {
						echo "<div class='alert alert-success text-center '>{$good}</div>";
					}
				?>
				<img class="rounded mx-auto d-block" src="img/logo.png">
				<form class="up_form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
					<h1 class="text-center">Edit Profile</h1><br>
					<label>New Username:</label>
					<input type="text" name="new_username" class="form-control" placeholder=" Enter New Username"  value="" required><br>
					<label>New Password:</label>
					<input type="password" name="new_password" class="form-control" placeholder="Enter New Password" value="" required><br>
					<input type="submit" name="update" class="btn btn-info btn-block" value="update">
					<center><a href="holyspirit.php">Back</a></center>
				</form>
			</div>
			<div class="col-md-4 col=sm-4 col-xs-12">&nbsp;</div>
		</div>
	</div>
</body>
</html>