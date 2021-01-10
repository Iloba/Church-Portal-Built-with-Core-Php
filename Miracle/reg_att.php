<?php 
	require ('server.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Rccg ~~ Register Attendance</title>
	<link rel="icon"  href="img/logo.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="bootstrap.min.js"></script>
	<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
	<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

	<!--Font Awesome (added because you use icons in your prepend/append)-->
	<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
	<script type="text/javascript" src="bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/miracle.css">
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
						<h2 class="text-center">Attendance Register</h2>
						<em>Note: All Fields with Asterik signs are required</em><br>
						<em>Enter <b>0</b> for Fields that are not neccesary </em>
					</div>
					<div class="card-body">
						<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
							<!-- Inline CSS based on choices in "Settings" tab -->
							<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}.bootstrap-iso form .input-group-addon {color:#983d3d; background-color: ; border-radius: 4px; padding-left:12px}
							</style>

							<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
							<div class="bootstrap-iso">
							    <div class="form-group ">
							      <label>Date <span class="	required">*</span></label>
							      <div class="input-group">
							       <div class="input-group-addon">
							        <i class="fa fa-calendar">
							        </i>
							       </div>
							       <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text" required />
							      </div>
							   </div>
							</div>
							<label>Day <span class="	required">*</span></label>
							<input type="text" name="day" class="form-control" placeholder="Enter Day" required><br>	
							<label>	Men <span class="required">*</span></label>
							<input type="" name="men" class="form-control" placeholder="Enter Number of Men" maxlength="3" required><br>	
							<label>	Women <span class="required">*</span></label>
							<input type="" name="women" class="form-control" placeholder="Enter Number of Women" maxlength="3" required><br>	
							<label>	Children <span class="required">*</span></label>
							<input type="" name="children" class="form-control" placeholder="Enter Number of Men" maxlength="3" required><br>	
							<label>Sunday School Attendance</label>
							<input type="" name="sch" class="form-control" placeholder="Enter Sunday School Attendance" maxlength="3"><br>	
							<label>First Timers</label>
							<input type="" name="first_timers" class="form-control" placeholder="Enter Number of first Timers" maxlength="3"><br>	
							<label>New Converts</label>
							<input type="" name="new_conv" class="form-control" placeholder="Enter Number of New Converts" maxlength="3"><br>	
							<label>Message Title <span class="required">*</span></label>
							<input type="text" name="msg" class="form-control" placeholder="Enter Theme of Mesaage" maxlength="" required><br>	
							<label>Preacher <span class="required">*</span></label>
							<input type="text" name="prc" class="form-control" placeholder="Enter Name of Preacher" maxlength=""  required> <br>	
							<input type="submit" name="reg_att" class="btn btn-success btn-block" value="Enter record">
							<center><a href="holyspirit.php">Back</a></center>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- Extra JavaScript/CSS added manually in "Settings" tab -->
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