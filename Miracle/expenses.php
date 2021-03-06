<!DOCTYPE html>
<html>
<head>
	<title>Rccg Expenses</title>
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
						<h2 class="text-center">Expenses</h2>
					</div>
					<div class="card-body">
						<div>
							<input type="text" name="search" id="search" class="form-control" placeholder="Search"><br>
						</div>
						<div class="table-responsive">
							<table class="table table-bordered" id="expenses">
								<?php 

									require ('connection.php');

									if (isset($_POST['delete_btn'])) {
										$delete_id = $_POST['delete_id'];

										$query = "DELETE FROM expenses WHERE id = '$delete_id'";
										$run_query = mysqli_query($connect, $query);
										if ($run_query) {
											$good = "Delete Succesful";
										}else{
											$error = "Delete Failed";
										}
									}

									$query = "SELECT * FROM expenses";
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
									<thead>
											<tr>
												<th>id</th>
												<th>Description</th>
												<th>Amount Spent</th>
												<th>Date</th>
												<th>Action</th>
											</tr>
									</thead>
									<?php
								endif;
									while ($expenses = mysqli_fetch_assoc($run_query)) :
										$amount = $expenses['amount'];
										?>
										<tbody>
												<tr>
													<td><?php echo $expenses['id']; ?></td>
													<td><?php echo $expenses['description']; ?></td>
													<td><?php echo 'N'.$amount; ?></td>
													<td><?php echo $expenses['date']; ?></td>
													<td>
														<form method="POST">
															<input type="hidden" name="delete_id" value="<?php echo $expenses['id']; ?>">
															<input type="submit" name="delete_btn" value="Delete" class="btn btn-danger">
														</form>
													</td>
												</tr>
										</tbody>
									<?php 
								endwhile;

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
			$('#expenses tr').each(function(){
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