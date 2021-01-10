<?php 
	
	require ('server.php');
	require ('connection.php');

	$fname = "";
	$age = "";		
	$gender = "";
	$phone = "";
	$occ = "";
	$addr = "";
	$cat = "";
	$dept = "";
	if (isset($_GET['editm'])) {
		$edit_id = $_GET['editm'];



		
		$query = "SELECT * FROM members WHERE id = '$edit_id'";
		$run_query = mysqli_query($connect, $query);
		if (mysqli_num_rows($run_query) > 0) {
			while ($members = mysqli_fetch_assoc($run_query)) {

				$fname = $members['fname'];
				$age = $members['age'];
				$gender = $members['gender'];
				$phone = $members['phone'];
				$occ = $members['occ'];
				$addr = $members['adr'];
				$cat = $members['cat'];
				$dept = $members['dept']; echo "<br>";
				echo"You are About to Edit <b>$fname</b> Record Kindly update Record Carefully";			
				
			}
		}
	}


	
	//Enter New Record
	
		if (isset($_POST['edit'])) {
			$new_fname = $_POST['new_fname'];
			$new_age = $_POST['new_age'];
			$new_gender = $_POST['new_gen'];
			$new_phone = $_POST['new_phone'];
			$new_occ = $_POST['new_occ'];
			$new_addr = $_POST['new_adr'];
			$new_cat = $_POST['new_cat'];
			$new_dept = $_POST['new_dept'];


			if (strlen($new_fname) < 5) {
				$error = "Please Enter A Valid Name";
			}elseif (strlen($new_occ) < 5) {
				$error = "Please Enter A Valid Occupation";
			}elseif (strlen($new_addr) < 5) {
				$error = "Please Enter A Valid Address So We Can Get Back to You";
			}else{
				$query = "UPDATE members SET
						fname = '$new_fname',
						age = '$new_age',
						gender = '$new_gender',
						phone = '$new_phone',
						occ = '$new_occ',
						adr = '$new_addr',
						cat = '$new_cat',
						dept = '$new_dept' WHERE id = '$edit_id'
						";
						$run_query = mysqli_query($connect, $query);
						if ($run_query) {
							$good = "Update Successful";
						}else{
							$error = "Update Failed Please Try Again";
						}
			}
		}
	





?>
<!DOCTYPE html>
<html>
<head>
	<title>Rccg ~~ Edit Members</title>
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
						<h2 class="text-center">Edit Member Bio Data</h2>
					</div>
					<div class="card-body">
						<form method="POST" action="">
							<label class="">Full Name</label>
							<input type="text" name="new_fname" class="form-control" placeholder="Enter First Name" value="<?php echo $fname;  ?>" required><br>
							<label>Age:</label>
							<input type="" name="new_age" class="form-control" placeholder="Enter Age" maxlength="2" value="<?php echo $age; ?>"  pattern="^0[1-9]|[1-9]\d$" required ><br>
							<label>Gender:</label>
							<select name="new_gen" class="form-control">
								<option><?php echo $gender; ?></option>
								<option>Male</option>
								<option>Female</option>
								<option>Others</option>
							</select><br>
							<label>Phone Number:</label>
							<input type="" name="new_phone" class="form-control" value="<?php echo $phone; ?>" placeholder="Enter Phone Number" maxlength="14"  value="+234"><br>
							<label>Occupation:</label>
							<input type="" name="new_occ" value="<?php echo $occ; ?>" class="form-control" placeholder="Enter Occupation" required><br>
							<label>Address:</label>
							<input type="text" name="new_adr" class="form-control" value="<?php echo $addr; ?>" placeholder="Enter Address" required><br>
							<label>Category:</label>
							<select name="new_cat" class="form-control">
								<option><?php echo $cat; ?></option>
								<option>Men</option>
								<option>Women</option>
								<option>Teen/youth</option>
								<option>Children</option>
							</select><br>
							<label>Department</label>
							<select name="new_dept" class="form-control" >
								<option><?php echo $dept; ?></option>
								<option>Ushering</option>
								<option>Choir</option>
								<option>Prayer Warrior</option>
								<option>Welfare</option>
							</select><br>
							<button type="Submit" name="edit" class="btn btn-success btn-block">Update Bio Data</button>
							<center><a  href="holyspirit.php">Back</a></center>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div><br>
</body>
</html>