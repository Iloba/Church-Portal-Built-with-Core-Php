<!DOCTYPE html>
<html>
<head>
	<title>Church Property</title>
	<link rel="icon"  href="img/logo.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/miracle.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-4 col-xs-12">
				<div class="card">
					<div class="card-header">
						<img class="rounded mx-auto d-block" src="img/logo.png">
						<h2 class="text-center">Church Properties</h2>
					</div>
					<div class="card-body">
						<div>
							<input type="text" name="search" id="search" class="form-control" placeholder="Search Item"><br>
						</div>
						<div class="table-responsive">
							<table class="table table-bordered" id="properties">
								<?php 

								require ('connection.php');
								if (isset($_POST['delete_btn'])) {
									$delete_id = $_POST['delete_id'];

									$query = "DELETE FROM properties WHERE id = '$delete_id'";
									$run_query = mysqli_query($connect, $query);
									if ($run_query) {
										$good = "Delete Successful";
									}else{
										$error = "Delete Failed";
									}
								}


								$query = "SELECT * FROM properties";
								$run_query = mysqli_query($connect, $query);
								if (mysqli_num_rows($run_query) > 0) :
									?>
									<thead>
											<tr>
												<th>iD</th>
												<th>Name</th>
												<th>Description</th>
												<th>Quantity</th>
												<th>Date</th>
												<th>Action</th>
											</tr>
									</thead>
									<?php
									while ($prop = mysqli_fetch_assoc($run_query)) :
										?>
										<tbody>
												<tr>
													<td><?php echo $prop['id']; ?></td>
													<td><?php echo $prop['name']; ?></td>
													<td><?php echo $prop['description']; ?></td>
													<td><?php echo $prop['qty']; ?></td>
													<td><?php echo $prop['date']; ?></td>
													<td>
														<form method="POST">
															<input type="hidden" name="delete_id" value="<?php echo $prop['id']; ?>">
															<input type="submit" name="delete_btn" class="btn btn-danger" value="Delete"> 
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
<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
<script>
	$(document).ready(function(){
		$('#search').keyup(function(){
			search_table($(this).val());
		});

		function search_table(value){
			$('#properties tr').each(function(){
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