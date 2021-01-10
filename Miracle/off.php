<!DOCTYPE html>
<html>
<head>
	<title>Offerings</title>
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
						<img class="rounded mx-auto d-block " src="img/logo.png">
						<h2 class="text-center">Offering/Fund Register</h2>
						<em>Note: All records of Offerings are Displayed in the Table Below</em>
					</div>
					<div class="card-body">
						<div>
							<input type="text" name="search" id="search" class="form-control" placeholder="Search"><br>
						</div>
						<div class="table-responsive" >
							<table class="table table-bordered" id="offering">
								<?php 

									require ('connection.php');

									if (isset($_POST['delete_btn'])) {
										$delete_id = $_POST['delete_id'];

										$query = "DELETE FROM offering WHERE id = '$delete_id'";
										$run_query = mysqli_query($connect, $query);
										if ($run_query) {
											$good = "Delete Succesful";
										}else{
											$error = "Delete Failed";
										}
									}

									$query = "SELECT * FROM offering";
									$run_query = mysqli_query($connect, $query);
									if (mysqli_num_rows($run_query) > 0) :
										?>
										<thead>
												<tr>
													<th>id</th>
													<th>Date</th>
													<th>Day</th>
													<th>Crm</th>
													<th>Slo</th>
													<th>Total Tithe</th>
													<th>Thanksgiving</th>
													<th>Pledge</th>
													<th>Mission </th>
													<th>Special Programme</th>
													<th>Children</th>
													<th>Total</th>
													<th>Action</th>
												</tr>
										</thead>
									<?php
									while ($off = mysqli_fetch_assoc($run_query)) :
										$crm = $off['crm'];
										$slo = $off['slo'];
										$tithe = $off['tithe'];
										$thanks = $off['thanksgiving'];
										$pledge = $off['pledge'];
										$mission = $off['mission_offering'];
										$special = $off['special_offering'];
										$children = $off['children_offering'];
										?>
										<tbody>
												<tr>
													<td><?php echo $off['id']; ?></td>
													<td><?php echo $off['date']; ?></td>
													<td><?php echo $off['day']; ?></td>
													<td><?php echo  'N'. $crm;?></td>
													<td><?php echo 'N'. $slo; ?></td>
													<td><?php echo 'N'. $tithe; ?></td>
													<td><?php echo 'N'. $thanks; ?></td>
													<td><?php echo 'N'. $pledge; ?></td>
													<td><?php echo 'N'. $mission; ?></td>
													<td><?php echo 'N'. $special; ?></td>
													<td><?php echo 'N'. $children; ?></td>
													<td><?php echo "N". number_format($crm + $slo + $tithe + $thanks + $pledge + $mission + $special + $children, 2)  ; ?></td>
													<td>
														<form method="POST">
															<input type="hidden" name="delete_id" value="<?php echo $off['id']; ?>">
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
						</div>
						<center><a href="holyspirit.php">Back</a></center>
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
			$('#offering tr').each(function(){
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