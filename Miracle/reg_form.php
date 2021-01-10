<?php require ('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Reg Form</title>
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
			<div class="col-md-2 col-sm-4 col-xs-12">&nbsp;</div>
			<div class="col-md-8 col-sm-4 col-xs-12"><br>
				<div class="card">
					<div class="card-header">
						<img class="rounded mx-auto d-block" src="img/logo.png">
						<h2 class="text-center">Upload Remmitance Forms Here</h2>
					</div>
					<div class="card-body">
						<form method="POST" action="" enctype="multipart/form-data">
							<input type="hidden" name="size" value="10000000">
							<label>Choose File (Images Only)</label>
							<input class="form-control" type="file" name="image" required ><br>
							<label>Text</label>
							<textarea class="form-control" cols="5" name="text" placeholder="Enter Month " required></textarea><br>
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
							       <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text" required />
							     </div>
							   </div>
							</div><br>
							<input type="submit" name="upload" value="Upload Image" class="btn btn-success btn-block btn-sm">
						</form>
					</div>
					<center><a href="holyspirit.php">Back</a></center>
				</div>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-12">&nbsp;</div>
		</div>
	</div>
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