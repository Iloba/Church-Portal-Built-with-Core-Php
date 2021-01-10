<?php 
	session_start();
	require ("connection.php");

	//Login Admin to Dashboard
	
		if (isset($_POST['login'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];

			if (strlen($username) < 5) {
				$error = "Username Not Recognized";
			}else{
				$query =  "SELECT * FROM login WHERE username = '$username' && password = '$password' Limit 1";
				$run_query = mysqli_query($connect, $query);
				if (mysqli_num_rows($run_query) == 1) {
						$_SESSION['username'] = $username;
						$_SESSION['success'] = "you are now logged in";
						$_SESSION['password'] = $password;
						$_SESSION['id'] = $id;
						header('location: holyspirit.php');
						
				}else{
					$error = "Wrong Username/ Password Match";
				}
			}
		}
	


	///Register Member
	$select = "---Select---";

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		if (isset($_POST['register'])) {
			$full_name = $_POST['mem_fname'];
			$age = $_POST['mem_age'];
			$gender = $_POST['mem_gen'];
			$phone = $_POST['mem_phone'];
			$occ = $_POST['mem_occ'];
			$addr = $_POST['mem_adr'];
			$cat = $_POST['mem_cat'];
			$dept = $_POST['mem_dept'];

			if (strlen($full_name) < 5 ) {
				$error = "Enter a Valid Full Name";
			}elseif (strlen($occ) < 5) {
				$error = "Enter a Valid Occupation";
			}elseif ($gender == $select) {
				$error = "Please Select Gender";
			}elseif ($cat == $select) {
				$error = "Please Select Category";
			}elseif ($dept == $select) {
				$error ="Please Select Department ";
			}elseif (strlen($addr) < 5) {
				$error = "Please Enter a Valid Address So we Can Reach you";
			}else{
				$query = "INSERT INTO members (fname, age, gender, phone,  occ, adr, cat, dept)
						 VALUES
						('$full_name', '$age', '$gender', '$phone', '$occ', '$addr', '$cat', '$dept')";
						$run_query = mysqli_query($connect, $query);
						if ($run_query) {
							$good = "Registration Successful";
						}else{
							$error = "Registration Failed";
						}
			}
		}
	}

	//Register Workers/Ministers

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		if (isset($_POST['reg_worker'])) {
			$wor_name = $_POST['wor_name'];
			$wor_age = $_POST['wor_age'];
			$wor_gender = $_POST['wor_gender'];
			$wor_phone = $_POST['wor_phone'];
			$wor_addr = $_POST['wor_adr'];
			$wor_occ = $_POST['wor_occ'];
			$wor_dept = $_POST['wor_dept'];

			if (strlen($wor_name) < 5) {
				$error = "Please Enter A Valid Full Name";
			}elseif (strlen($wor_addr) < 5) {
				$error = "Please Enter a Valid Address So We Can Reach You";
			}elseif ($wor_gender == $select) {
				$error = "Please Select Gender";
			}elseif ($wor_dept == $select) {
				$error = "Please Select Department";
			}elseif (strlen($wor_occ) < 5) {
				$error = "Please Enter A Valid Occupation ";
			}else{
				$query = "INSERT INTO workers (fname, age, gender, phone, addr, occ, dept) 
				VALUES('$wor_name', '$wor_age', '$wor_gender', '$wor_phone', '$wor_addr', '$wor_occ', '$wor_dept')";
				$run_query = mysqli_query($connect, $query);
				if ($run_query) {
					$good = "Registration Succesfull";
				}else{
					$error = "Registration Failed";
				}
			}
		}
	}




	//Logout User
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
		exit();
	}

		//Register Expenses
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		if (isset($_POST['reg_expenses'])) {
			$des = $_POST['expense'];
			$price = number_format($_POST['amount'], 2);
			$date = $_POST['date'];


			if (strlen($des) < 5) {
				$error = "Please Enter a Valid Description";
			}elseif (strlen($price) < 2) {
				$error = "Please Enter Valid Amount";
			}else{
				$query = "INSERT INTO expenses (description, amount, date) VALUES('$des', '$price', '$date')";
				$run_query = mysqli_query($connect, $query);
				if ($run_query) {
					$good = "Expense Successfully Recorded";
				}else{
					$error = "Record Failed to Upload";
				}
			}	
		}

	}

	//Enter Attendance Record
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		if (isset($_POST['reg_att'])) {
			$date = $_POST['date'];
			$day = $_POST['day'];
			$men = $_POST['men'];
			$women = $_POST['women'];
			$children = $_POST['children'];
			$sch = $_POST['sch'];
			$first_timers = $_POST['first_timers'];
			$new_converts = $_POST['new_conv'];
			$message = $_POST['msg'];
			$preacher = $_POST['prc'];

			if (strlen($date) < 8) {
				$error = "Please Enter A Valid Date";
			}elseif (strlen($day) < 5) {
				$error = "Please Enter A Valid Day";
			}elseif(strlen($message) < 5){
				$error ="Enter A Valid Message Title Please";
			}elseif (strlen($preacher) < 5) {
				$error = "Enter A Valid Preacher Name Please";
			}else{
				$query = "INSERT INTO attendance (date, day, men, women, children, sch, first_timers, new_converts, mesage, preacher) VALUES
				('$date', '$day', '$men', '$women', '$children', '$sch', '$first_timers', '$new_converts', '$message', '$preacher')";
				$run_query = mysqli_query($connect, $query);
				if ($run_query) {
					$good = "Record Successful";
				}else{
					$error = "Record Failed";
				}
			}
		}

		
	}

	//Enter Offering Record
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		if (isset($_POST['reg_off'])) {
			$date_off  = $_POST['date'];
			$day_off = $_POST['day'];
			$crm = number_format($_POST['crm'], 2);
			$slo = number_format($_POST['slo'], 2);
			$tithe = number_format($_POST['tithe'], 2);
			$thanksgiving = number_format($_POST['thanksgiving'], 2);
			$pledge = number_format($_POST['seed'], 2);
			$mission = number_format($_POST['mission'], 2);
			$children_off = number_format($_POST['children_off'], 2);
			$prog = number_format($_POST['sp_off'], 2);

			if (strlen($date_off) < 8) {
				$error = "Please Enter Valid Date";
			}elseif (strlen($day_off) < 5) {
				$error = "Please Enter Valid Day";
			}else{
				$query = "INSERT INTO offering (date, day, crm, slo, tithe, thanksgiving, pledge, mission_offering, children_offering, special_offering)
				VALUES('$date_off', '$day_off', '$crm', '$slo', '$tithe', '$thanksgiving', '$pledge', '$mission', '$children_off', '$prog')";
				$run_query = mysqli_query($connect, $query);
				if ($run_query) {
					$good = "Record Successful";
				}else{
					$error = "Record Failed";
				}
			}

		}
	}

	//Upload Remittance Form
	if (isset($_POST['upload'])) {
		
		//Path to Store the Uploaded 
		$target = "remmittance_forms/" .basename($_FILES['image']['name']);

		//Collect All Submitted Data
		$image = $_FILES['image']['name'];
		$text = $_POST['text'];
		$date = $_POST['date'];

		//Store all Submitted Data To Data Base
		$query = "INSERT INTO images(image, text, date) VALUES('$image', '$text', '$date')";
		$run_query = mysqli_query($connect, $query);


		//Move Uploaded Image to the Named Folder
		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
			$good = "Upload Successful";
		}else{
			$error = "Upload Failed";
		}


	}



	//Register Church Property
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		if (isset($_POST['reg_pro'])) {
			$name = $_POST['name'];
			$description = $_POST['description'];
			$qty = $_POST['qty'];
			$date = $_POST['date'];

			if (strlen($name) < 3) {
				$error = "Please Enter a Valid Name for Property . Name too Short";
			}elseif (strlen($description) < 5) {
				$error = "Please Enter a Valid Description for Property... Description too Short";
			}else{
				$query = "INSERT INTO properties(name, description, qty, date)
				 VALUES('$name', '$description', '$qty', '$date')";
				 $run_query = mysqli_query($connect, $query);
				 if ($run_query) {
				 	$good = "Registeration Successful";
				 }else{
				 	$error = "Registeration Failed";
				 }
			}
		}
	}

	//Register First Timers
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		if (isset($_POST['reg_ft'])) {
			$f_name = $_POST['f_name'];
			$f_age = $_POST['f_age'];
			$f_gender = $_POST['f_gender'];
			$f_phone = $_POST['f_phone'];
			$f_adr = $_POST['f_adr'];
			$f_cat = $_POST['f_cat'];
			$date = $_POST['date_f'];

			if (strlen($f_name) < 5) {
				$error = "Please Enter a Valid Name.. Name too Short";
			}elseif (strlen($f_age) > 2) {
				$error = "Please Enter a Valid Age";
			}elseif ($f_gender == $select) {
				$error = "Please Select Gender";
			}elseif (strlen($f_phone) > 11) {
				$error = "Please Enter A Valid Phone Number";
			}elseif (strlen($f_adr) < 5) {
				$error = "Please Enter a Valid Adress So we Can Get Back to you";
			}elseif ($f_cat == $select) {
				$error = "Please Select Category";
			}else{
				$query = "INSERT INTO first_timers(name, age, gender, phone, addr, cat, date)
				 VALUES('$f_name', '$f_age', '$f_gender', '$f_phone', '$f_adr', '$f_cat', '$date')";
				 $run_query = mysqli_query($connect, $query);
				 if ($run_query) {
				 	$good = "Registeration Successful";
				 }else{
				 	$error = "Registration Failed";
				 }
			}
		}
	}




















 ?>