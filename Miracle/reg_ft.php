<?php 

	require ('server.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Rccg First Timers</title>
	<link rel="icon"  href="img/logo.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
	<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

	<!--Font Awesome (added because you use icons in your prepend/append)-->
	<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
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
			<div class="col-md-12 col-sm-4 col-xs-12">
				<div class="card">
					<div class="card-header">
						<img class="rounded mx-auto d-block" src="img/logo.png">
						<h2 class="text-center">Register Firstimers/New Converts</h2>
					</div>
					<div class="card-body">
						<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
							<label>Name</label>
							<input type="text" name="f_name" class="form-control" placeholder="Enter Full Name" required><br>
							<label>Age</label>
							<input type="number" name="f_age" class="form-control" placeholder="Enter Age" required><br>
							<label>Gender</label>
							<select class="form-control" name="f_gender" required>
								<option><?php echo $select; ?></option>
								<option>Male</option>
								<option>Female</option>
							</select><br>
							<label>Phone Number</label>
							<input type="number" name="f_phone" class="form-control" placeholder="Enter Phone Number" required><br>
							<label>Address</label>
							<input type="text" name="f_adr" class="form-control" placeholder="Enter Address" required><br>
							<label>Select</label>
							<select class="form-control" name="f_cat" required>
								<option><?php echo $select ?></option>
								<option>First Timer</option>
								<option>New Convert</option>
							</select><br>
							<!-- Inline CSS based on choices in "Settings" tab -->
							<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}.bootstrap-iso form .input-group-addon {color:#983d3d; background-color: ; border-radius: 4px; padding-left:12px}
							</style>

							<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
							<div class="bootstrap-iso">
							    <div class="form-group ">
							      <label>Date</label>
							      <div class="input-group">
							       <div class="input-group-addon">
							        <i class="fa fa-calendar">
							        </i>
							       </div>
							       <input class="form-control" id="date" name="date_f" placeholder="MM/DD/YYYY" type="text"/>
							     </div>
							   </div>
							</div><br>
							<input type="submit" name="reg_ft" class="btn btn-success btn-block btn-sm" value="Register">
						</form>
					</div>
					<center><a href="holyspirit.php">Back</a></center>
				</div>
			</div>
		</div>
	</div>
	<!-- Extra JavaScript/CSS added manually in "Settings" tab- -->
		<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
    $(document).ready(function(){
        var date_input=$('input[name="date"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>
</body>
</html>