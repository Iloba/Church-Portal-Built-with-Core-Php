<!DOCTYPE html>
<html>
<head>
	<title>First Timers</title>
	<link rel="icon"  href="img/logo.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/miracle.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-4 col-xs-12"><br>
				<div class="card">
					<div class="card-header">
						<img class="rounded mx-auto d-block" src="img/logo.png">
						<h2 class="text-center">First timers/ New Converts</h2>
					</div>
					<div class="card-body">
						<input type="text" name="searc" id="search" class="form-control" placeholder="Search"><br>
						<div class="table-responsive">
							<table class="table table-bordered" id="first_timers">
								<?php 

									require ('connection.php');
									if (isset($_POST['delete_btn'])) {
										$delete_id = $_POST['delete_id'];

										$query = "DELETE FROM first_timers WHERE id = '$delete_id'";
										$run_query = mysqli_query($connect, $query);
										if ($run_query) {
											$good = "Delete Successful";
										}else{
											$error = "Delete Failed";
										}

									}

									$query = "SELECT * FROM first_timers";
									$run_query = mysqli_query($connect, $query);
									if (mysqli_num_rows($run_query) > 0) :
										?>
											<thead>
													<tr>
														<th>id</th>
														<th>Name</th>
														<th>Age</th>
														<th>Gender</th>
														<th>Phone Number</th>
														<th>Address</th>
														<th>Category</th>
														<th>Date</th>
														<th>Action</th>
													</tr>
											</thead>
										<?php
										while ($ft = mysqli_fetch_assoc($run_query)) :
											?>
											<tbody>
													<tr>
														<td><?php echo $ft['id']; ?></td>
														<td><?php echo $ft['name']; ?></td>
														<td><?php echo $ft['age']; ?></td>
														<td><?php echo $ft['gender']; ?></td>
														<td><?php echo $ft['phone']; ?></td>
														<td><?php echo $ft['addr']; ?></td>
														<td><?php echo $ft['cat']; ?></td>
														<td><?php echo $ft['date']; ?></td>
														<td>
															<form method="POST">
																<input type="hidden" name="delete_id" value="<?php echo $ft['id']; ?>">
																<input type="submit" name="delete_btn" class="btn btn-danger btn-sm" value="Delete">
															</form>
														</td>
													</tr>
											</tbody>
										<?php
									endwhile;
									endif;


								?>
							</table>
						</div>
					</div>
					<center><a href="holyspirit.php">Back</a></center>
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
<script>
	$(document).ready(function(){
		$('#search').keyup(function(){
			search_table($(this).val());
		});

		function search_table(value){
			$('#first_timers tr').each(function(){
				var  found = 'false';
				$(this).each(function(){
					if ($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0) 
					{
						found = 'true';
					}


				});
				if (found == 'true') 
				{
					$(this).show();
				}
				else{
					$(this).hide();
				}
			});
		}

	});
</script> 
</body>
</html>