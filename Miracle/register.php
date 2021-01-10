<?php 

	require ('connection.php');

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		if (isset($_POST['register'])) {
			$name = $_POST['username'];
			$pass = $_POST['password'];


			if (strlen($name) < 5) {
				$error = "Enter Valid Username";
			}elseif (strlen($pass) < 5) {
				$error = "Enter a Valid Password Password Strength Weak (6 Characthers Minimum)";
			}else{
				$query = "INSERT INTO login (username, password) VALUES ('$name', '$pass')";
				$run_query = mysqli_query($connect, $query);
				if ($run_query) {
					$good = "Registeration Successful";
				}else{
					$error = "Registeration Failed";
				}
			}
		}
	}



?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="icon"  href="img/logo.png">
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
				<?php 

					



				?>
				<form class="up_form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
					<h1 class="text-center">Register</h1><br>
					<label>New Username:</label>
					<input type="text" name="username" class="form-control" placeholder=" Enter New Username"  value="" required><br>
					<label>New Password:</label>
					<input type="password" name="password" class="form-control" placeholder="Enter New Password" value="" required><br>
					<input type="submit" name="register" class="btn btn-info btn-block" value="register">
				</form>
			</div>
			<div class="col-md-4 col=sm-4 col-xs-12">&nbsp;</div>
		</div>
	</div>
</body>
</html>