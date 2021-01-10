<?php 

	require ('server.php');

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Rccg ~~ Register Workers</title>
	<link rel="icon"  href="img/logo.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/miracle.css">
</head>
<body>
	<?php 
		if (isset($error)) {
			echo "<div class='alert alert-danger alt text-center'>{$error}</div>";
		}
		if (isset($good)) {
			echo "<div class='alert alert-success  text-center'>{$good}</div>";
		}


	?>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-4 col-xs-12"><br>
				<div class="card">
					<div class="card-header">
						<img class="rounded mx-auto d-block" src="img/logo.png">
						<h2 class="text-center">Register Workers/Ministers</h2>
					</div><br>
					<div class="card-body">
						<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
							<label> Full Name:</label>
							<input type="text" name="wor_name" class="form-control" placeholder="Enter Worker Name" required><br>
							<label> Age</label>
							<input type="" name="wor_age" class="form-control" placeholder="Enter Worker Age" maxlength="2" pattern="^0[1-9]|[1-9]\d$" required><br>
							<label> Gender:</label>
							<select class="form-control" name="wor_gender">
								<option><?php echo $select; ?></option>
								<option>Male</option>
								<option>Female</option>
								<option>Others</option>
							</select><br>
							<label> Phone Number</label> 
							<input type="" name="wor_phone" class="form-control" value="+234" maxlength="14"   required><br>
							<label> Address</label>
							<input type="text" name="wor_adr" class="form-control" placeholder="Enter Workers Address" required><br>
							<label> Occupation</label>
							<input type="text" name="wor_occ" class="form-control" placeholder="Enter Workers Occupation" required><br>
							<label> Church Department</label>
							<select class="form-control" name="wor_dept">
								<option><?php echo $select; ?></option>
								<option>Ushering</option>
								<option>Choir</option>
								<option>Welfare</option>
								<option>Sanitation</option>
								<option>Prayer Warriors</option>
							</select><br>
							<button type="submit" name="reg_worker" class="btn btn-success btn-block">Register</button>
							<center><a  href="holyspirit.php">Back</a></center>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>