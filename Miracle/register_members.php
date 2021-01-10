<?php 
	
	require ('server.php');





?>
<!DOCTYPE html>
<html>
<head>
	<title>Rccg ~~ Register Members</title>
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
		<div class="row ">
			<div class="col-md-12 col-sm-4 col-xs-12"><br>
				<div class="card">
					<div class="card-header">
						<img class="rounded mx-auto d-block" src="img/logo.png">
						<h2 class="text-center">Register Members</h2>
					</div>
					<div class="card-body">
						<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
							<label class="">Full Name</label>
							<input type="text" name="mem_fname" class="form-control" placeholder="Enter First Name" required ><br>
							<label>Age:</label>
							<input type="" name="mem_age" class="form-control" placeholder="Enter Age" maxlength="2"  pattern="^0[1-9]|[1-9]\d$" required ><br>
							<label>Gender:</label>
							<select name="mem_gen" class="form-control">
								<option><?php echo $select; ?></option>
								<option>Male</option>
								<option>Female</option>
								<option>Others</option>
							</select><br>
							<label>Phone Number:</label>
							<input type="" name="mem_phone" class="form-control" placeholder="Enter Phone Number" maxlength="14"  value="+234"><br>
							<label>Occupation:</label>
							<input type="" name="mem_occ" class="form-control" placeholder="Enter Occupation" required><br>
							<label>Address:</label>
							<input type="text" name="mem_adr" class="form-control" placeholder="Enter Address" required><br>
							<label>Category:</label>
							<select name="mem_cat" class="form-control">
								<option><?php echo $select; ?></option>
								<option>Men</option>
								<option>Women</option>
								<option>Teen/youth</option>
								<option>Children</option>
							</select><br>
							<label>Department</label>
							<select name="mem_dept" class="form-control" >
								<option><?php echo $select; ?></option>
								<option>Ushering</option>
								<option>Choir</option>
								<option>Prayer Warrior</option>
								<option>Sanitation</option>
								<option>Welfare</option>
							</select><br>
							<button type="Submit" name="register" class="btn btn-success btn-block">Register</button>
							<center><a  href="holyspirit.php">Back</a></center>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div><br>
</body>
</html>