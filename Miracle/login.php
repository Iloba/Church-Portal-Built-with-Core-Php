<?php require ('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login~~Form</title>
	<meta charset="utf-8">
	<meta name="description" content="RCCG MIRACLE ZONE">
	<meta name="keywords" content="Miracle parish, rccg, miracle zone, church">
	<meta name="author" content="Emeka Iloba Timothy">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon"  href="img/logo.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/miracle.css">
</head>
<body id="login">
	<?php 
		if (isset($error)) {
			echo "<div class='alert alert-danger text-center error'>{$error}</div>";
		}


	?>

	<div class="container-fluid">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-4 col-xs-12"><br>
						<h2 class="h1">Rccg Miracle Zone Church Portal</h2>
						<h3 class="h1">Feautures</h3>
						<p>
							<ol class="list">
								<li>Stores Church Records in Data Base Records include List of Church Members, Attendance, Offerings and Tithes Record.</li>
								<li>Stores Record of Church Expenses</li>
								<li>Stores record and Manages Church Funds</li>
								<li>Store Remittance Sheets in Database for Adequate Safety Purposes</li>
								<li>Stores Record of Church Property</li>
							</ol>

						</p>
					</div>
					
					<div class="col-md-6 col-sm-4 col-xs-12">
						<div class="card form">
							<div class="card-header">
								<img class="rounded mx-auto d-block" src="img/logo.png">
							</div>
							<div class="card-body">
								<form  method="POST" action="login.php" >
									<div class="form-group"><br>
										<label class="Control-label lab">Username:</label>
										<input class="form-control" type="text" name="username" placeholder="Enter Username" required><br>
										<label class="Control-label lab">Password:</label>
										<input class="form-control" type="Password" name="password" placeholder="Enter Password" required><br>
										<input type="submit" name="login" value="Login" class="btn btn-outline-success btn-block" >
									</div>
								</form>
							</div>
						</div>
					</div><br><br>
				</div>
				
			</div>
		</div>
	</div><br>

<script type="text/javascript">
	var i = 0;
	function read(){
		if (!i) {
			document.getElementById("more").style.display = "inline";
			document.getElementById("dots").style.display = "none";
			document.getElementById("read").innerHTML = "Read Less";
			i =1;
		}
		else{
		document.getElementById("more").style.display = "none";
		document.getElementById("dots").style.display = "inline";
		document.getElementById("read").innerHTML = "Read More";
		i =0;
	}
		
	}
</script>	
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!--ShareThis BEGIN-->
<!--ShareThis END-->
</body>
</html>