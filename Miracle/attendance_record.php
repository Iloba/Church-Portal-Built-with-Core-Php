<!DOCTYPE html>
<html>
<head>
	<title>Rccg	~~ Attendance Record</title>
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
						<h2 class="text-center">Attendance Records</h2>
					</div>
					<div class="card-body">
						<div>
							<input type="text" name="search " id="search" class="form-control" placeholder="search"><br>
						</div>
						<div class="table-responsive">
							<table class="table table-bordered" id="attendance">
								<?php 
									
									require ('connection.php');

									if (isset($_POST['delete_btn'])) {
										$delete_id = $_POST['delete_id'];

										$query = "DELETE FROM attendance WHERE id = '$delete_id'";
										$run_query = mysqli_query($connect, $query);
										if ($run_query) {
											$good = "Delete Successful";
										}else{
											$error = "Delete Failed";
										}
									}


									$query = "SELECT * FROM attendance";
									$run_query = mysqli_query($connect, $query);
									if (mysqli_num_rows($run_query) > 0) :
										?>
										<thead>
												<tr>
													<th>id</th>
													<th>Date</th>
													<th>Day</th>
													<th>Men</th>
													<th>Women</th>
													<th>Children</th>
													<th>Sunday School</th>
													<th>First Timers</th>
													<th>new Converts</th>
													<th>Total</th>
													<th>Message Theme</th>
													<th>preacher</th>
													<th>Del</th>
												</tr>
										</thead>
										<?php
										while ($att = mysqli_fetch_assoc($run_query)) :
											$men = $att['men'];
											$women = $att['women'];
											$children = $att['children'];
											$sundays = $att['sch'];
											$ft = $att['first_timers'];
											$nc = $att['new_converts'];
											?>
											<tbody>
													<tr>
														<td><?php echo $att['id']; ?></td>
														<td><?php echo $att['date']; ?></td>
														<td><?php echo $att['day']; ?></td>
														<td><?php echo $att['men']; ?></td>
														<td><?php echo $att['women']; ?></td>
														<td><?php echo $att['children']; ?></td>
														<td><?php echo $att['sch']; ?></td>
														<td><?php echo $att['first_timers']; ?></td>
														<td><?php echo $att['new_converts']; ?></td>
														<td><?php echo $men + $women + $children ;?></td>
														<td><?php echo $att['mesage']; ?></td>
														<td><?php echo $att['preacher']; ?></td>
														<td>
															<form method="POST">
																<input type="hidden" name="delete_id" value="<?php echo $att['id']; ?>">
																<input type="submit" name="delete_btn" value="Del" class="btn btn-danger btn-sm">
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
			$('#attendance tr').each(function(){
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