<!DOCTYPE html>
<html>
<head>
	<title>Rccg ~~ Contacts</title>
	<link rel="icon"  href="img/logo.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/miracle.css">
</head>
<body>
	<div class="container">
		<div class="row"><br>
			<div class="col-md-12 col-sm-4 col-xs-12"><br>
				<div class="card">
					<div class="card-header">
						<img class="rounded mx-auto d-block" src="img/logo.png">
						<h2 class="text-center">Messages </h2>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered">
								<?php 

									require('connection.php');
									if (isset($_POST['delete_btn'])) {
										$delete_id = $_POST['delete_id'];

										$query = "DELETE FROM contacts WHERE id = '$delete_id'";
										$run_query = mysqli_query($connect, $query);
										if ($run_query) {
											$good = "Delete Successful";
										}else{
											$error = "Delete Failed";
										}
									}

									
									$query = "SELECT * FROM contacts";
									$run_query = mysqli_query($connect, $query);
									if (mysqli_num_rows($run_query) > 0) :
										?>
										<thead>
												<tr>
													<th>Id</th>
													<th>Name</th>
													<th>Email</th>
													<th>Subject</th>
													<th>Message</th>
													<th>Action</th>
												</tr>
										</thead>
									<?php
									while ($messages = mysqli_fetch_assoc($run_query)) :
										
									?>
									<tbody>
											<tr>
												<td><?php echo $messages['id']; ?></td>
												<td><?php echo $messages['name']; ?></td>
												<td><?php echo $messages['email']; ?></td>
												<td><?php echo $messages['subject']; ?></td>
												<td><?php echo $messages['message']; ?></td>
												<td>
													<form method="POST">
														<input type="hidden" name="delete_id" value="<?php echo $messages['id']; ?>">
														<input type="submit" name="delete_btn" value="Delete" class="btn btn-danger">
													</form>
												</td>
											</tr>
									</tbody>
									<?php
								endwhile;
								endif;


								?>
							</table>
							<center><a href="holyspirit.php">Back</a></center>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>