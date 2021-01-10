<!DOCTYPE html>
<html>
<head>
	<title>RCCG ~ Workers </title>
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
				<?php 

					require ('connection.php');

					if (isset($_POST['delete_btn'])) {
						$delete_id = $_POST['delete_id'];

						$query = "DELETE FROM workers WHERE id = '$delete_id'";
						$run_query = mysqli_query($connect, $query);
						if ($run_query) {
							$good = "Delete Sucsessful";
						}else{
							$error = "Delete Failed Please Try Again";
						}
					}


					$query = "SELECT * FROM workers";
					$run_query = mysqli_query($connect, $query);
					if (mysqli_num_rows($run_query)) :
						?>
						<?php 
							if (isset($error)) {
								echo "<div class='alert alert-danger alt text-center'>{$error}</div>";

							}
							if (isset($good)) {
								echo "<div class='alert alert-success  text-center'>{$good}</div>";

							}

						?>
						
							<div class="card">
								<div class="card-header">
									<img class="rounded mx-auto d-block" src="img/logo.png">
									<h2 class="text-center">Rccg Miracle Zone Workers/Ministers (Bio Data)</h2>
								</div><br>
								
								<div class="card-body">
									<div>
										<input type="text" name="search" id="search" placeholder="Search" class="form-control"><br>
									</div>
									<div class="table-responsive">
										<table class="table table-bordered" id="workers">
											<thead>
												<tr>
													<th>Id</th>
													<th>Name</th>
													<th>Age</th>
													<th>gender</th>
													<th>Phone Number</th>
													<th>Address</th>
													<th>Occupation</th>
													<th>Department</th>
													<th>Edit</th>
													<th>Delete</th>
												</tr>
											</thead>
											<?php 
												while ($workers = mysqli_fetch_assoc($run_query)) :
													
												?>
												<tbody>
														<tr>
															<td><?php echo $workers['id']; ?></td>
															<td><?php echo $workers['fname']; ?></td>
															<td><?php echo $workers['age']; ?></td>
															<td><?php echo $workers['gender']; ?></td>
															<td><?php echo $workers['phone']; ?></td>
															<td><?php echo $workers['addr']; ?></td>
															<td><?php echo $workers['occ']; ?></td>
															<td><?php echo $workers['dept']; ?></td>
															<td>
																<a class="btn btn-info btn-sm" href="edit_workers.php?editw=<?php echo $workers['id']; ?>">Edit</a>
															</td>
															<td>
																<form method="POST">
																	<input type="hidden" name="delete_id" value="<?php echo $workers['id'] ?>">
																	<input type="submit" name="delete_btn" value="Del" class="btn btn-danger btn-sm">
																</form>
															</td>
														</tr>
												</tbody>

												<?php 
											endwhile;
											?>
										</table>
									</div>
									<center><a href="holyspirit.php">Back</a></center>
								</div>
							</div>

						<?php endif ?>
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
			$('#workers tr').each(function(){
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