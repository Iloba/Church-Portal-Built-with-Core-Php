<!DOCTYPE html>
<html>
<head>
	<title>Remittance Form</title>
	<link rel="icon"  href="img/logo.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/miracle.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 col-sm-4 col-xs-12"><br>
				<div class="card">
					<div class="card-header">
						<img class="rounded mx-auto d-block" src="img/logo.png">
						<h2 class="text-center">Remmittance Forms</h2>
					</div>
					<div class="card-body">
						<div class="row">
							
								<?php 

									require ('connection.php');
								if (isset($_POST['delete_btn'])) {
									$delete_id = $_POST['delete_id'];

									$query = "DELETE FROM images WHERE id = '$delete_id'";
									$run_query = mysqli_query($connect, $query);
									if ($run_query) {
										$good = "Delete Successful";
									}else{
										$error = "Delete Failed";
									}
								}

								
								$query = "SELECT * FROM images";
								$run_query = mysqli_query($connect, $query);
								if (mysqli_num_rows($run_query) > 0) :
									?>
									<?php 

									while ($images = mysqli_fetch_assoc($run_query)) :
										?>
										<div class="col-md-3 col-sm-4 col-xs-12 rem"><br>
											<img class="img-fluid rem" src="remmittance_forms/<?php echo $images['image']; ?>">
											<h3  class="text-center img_name"><?php echo $images['text']; ?></h3>
											<small><h4 class="text-center img_date"><?php echo $images['date']; ?></h4></small>
											<form method="POST">
												<input type="hidden" name="delete_id" value="<?php echo $images['id']; ?>">
												<center><input type="submit" name="delete_btn" value="Delete" class="btn btn-danger btn-sm"></center>
											</form>
										</div>
									<?php
								endwhile;
								endif;


								?>
						</div>
						<center><a href="holyspirit.php">Back</a></center>
					</div>
				</div><br>
				
			</div>
		</div>
	</div>
</body>
</html>