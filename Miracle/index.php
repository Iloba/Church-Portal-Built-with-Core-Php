<?php 
	
	$server = "localhost";
	$user = "root";
	$password = "";
	$db = "miracle";


	$connect = mysqli_connect($server, $user, $password, $db);
	if (!$connect) {
		echo "Connection Not Established";
	}

	$name = "";
	$email = "";
	$subject = "";
	$message = "";
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		if (isset($_POST['submit'])) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$subject = $_POST['subject'];
			$message = $_POST['message'];


			if (strlen($name) < 5) {
				$error = "Please Enter A Valid Name So We Can Get Back to You";
			}elseif (strlen($subject) < 5) {
				$error = "Please Enter A  Valid Message Subject So We Can Get Back to you";
			}elseif (strlen($message) < 5) {
				$error = "Message is too Short Please Enter Valid Message";
			}else{
				$query = "INSERT INTO contacts (name, email, subject, message) VALUES('$name', '$email', '$subject', '$message')";
				$run_query = mysqli_query($connect, $query);
				if ($run_query) {
					$good = "Message Sent Successfuly Kindly Be Patient We Will Get Back to You";
				}else{
					$error = "Failed To Send Message Pls Check Form Details and Try Again";
				}
			}
		}
	}







?>
<!DOCTYPE html>
<html>
<head>
	<title>RCCG MIRACLE ZONE</title>
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
<body>
	<header><br>
		<?php 
			if (isset($error)) {
				echo "<div class='alert alert-danger text-center alt'><b>{$error}</b></div>";
			}
			if (isset($good)) {
				echo "<div class='alert alert-success text-center '>{$good}</div>";
			}


		?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2 col-sm-4 col-xs-12">
					<img class="img-fluid logo" draggable="false" src="img/logo.png"><br>
				</div>
				<div class="col-md-10 col-sm-4 col-xs-12">
					<h3 class="head">the reedemeed christian church of God <br><span class="zone">Miracle Zone</span><br><span>Kaduna Province 1</span> </h3>
				</div>
			</div>
			<marquee class="marquee">Jesus Christ the Same yesterday, and to day, and for ever (Hebrews 13:8)</marquee>
		</div>
	</header> <br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-12">&nbsp;</div>
			<div class="col-md-4 col-sm-4 col-xs-12">&nbsp;</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="sharethis-inline-share-buttons"></div>
			</div>
		</div>
	</div> <br>	
	<nav class="navbar navbar-expand-lg navbar-light bg-light  " id="nav">
		<a href="index.php" class="navbar-brand py-0"><span id="profile">RCCG</span> <span id="profile2">Miracle Zone</span></a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarmenu">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarmenu">
			<ul class="	navbar-nav	ml-auto">
				<li class="nav-link"><a href="index.php" class="nav-link py-0 ">Home</a></li>
				<li class="nav-item dropdown">
			    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">About</a>
			    <div class="dropdown-menu">
			      <a class="dropdown-item" href="#worship">Worship</a>
			      <a class="dropdown-item" href="#pastors">Meet Our Pastors</a>

			      <a class="dropdown-item" href="#footer">Go to Bottom</a>
			    </div>
			  </li>
				<li class="nav-link"><a href="#mission" class="nav-link py-0 ">Mission and Vision</a></li>
				<li class="nav-link"><a href="#activities" class="nav-link py-0">Activities</a></li>
				<li class="nav-link"><a href="#programmes" class="nav-link py-0">Programmes</a></li>
				<li class="nav-link"><a href="#contact" class="nav-link py-0">Contact</a></li>
				<li class="nav-link"><a target="_blank" href="login.php" class="nav-link py-0">Church Portal</a></li>
				 
			</ul>
		</div>
	</nav><br>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-sm-4 col-xs-12">
				<div id="MagicCarousel" class="carousel slide" data-ride="carousel">
					<ol class="	carousel-indicators">
						<li data-target="#MagicCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#MagicCarousel" data-slide-to="1" ></li>
						<li data-target="#MagicCarousel" data-slide-to="2" ></li>
						<li data-target="#MagicCarousel" data-slide-to="3" ></li>
						<li data-target="#MagicCarousel" data-slide-to="4" ></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="carousel-item active">
							<img class="d-block w-100 " src="img/s1.jpg" alt="Church Pictures">
							<div class="carousel-caption">
								<h3>RCCG MIRACLE ZONE, KADUNA</h3>
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-block w-100 " src="img/s2.jpg" alt="Church Pictures">
							<div class="carousel-caption">
								<h3>RCCG MIRACLE ZONE, KADUNA</h3>
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="img/s3.jpg" alt="Church Pictures">
							<div class="carousel-caption">
								<h3>RCCG MIRACLE ZONE, KADUNA</h3>
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="img/s2.jpg" alt="Church Pictures">
							<div class="carousel-caption">
								<h3>RCCG MIRACLE ZONE, KADUNA</h3>
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="img/s1.jpg" alt="Church Pictures">
							<div class="carousel-caption">
								<h3>RCCG MIRACLE ZONE, KADUNA</h3>
							</div>
						</div>
						<a class="carousel-control-prev" href="#MagicCarousel" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#MagicCarousel" role="button" data-slide="next">
							<span class="carousel-control-next-icon"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<h3 class="about">Rccg, A little History...</h3><br>
				<p class="history ">
					in July 1909, a son was born into the Akindayomi family of Ondo State of Nigeria. Even though this child grew up surrounded by idol worshippers, he knew there existed a greater power and yearned to know,
				“The God who created the earth and everyone on it”. This pursuit for God led him to the Church Missionary Society where he was baptized in 1927. Still spiritually unfulfilled, he joined the Cherubim and Seraphim church in 1931.
				Whilst there, he began to hear a voice within <span id="dots">....</span>
					him saying, “You will be my servant.” Since this was not his intention, he decided to ignore the voice. This went on for seven years during which all the business ventures that he tried resulted into failure. In debt and without peace of mind, he found himself totally dependent on the grace of God. Here marked the beginning of a definite relationship with God.Totally broken, he yielded saying, “Lord, I will go wherever you want me to go.” He asked for signs to confirm that this was indeed God’s call. The confirmation came through the Bible passages of Jeremiah 1:4-10, Isaiah 41:10-13 and Romans 8:29-31. The Lord assured him that He would provide for all his needs, as he would not receive any salary from that point on.  By 1952, he felt totally persuaded to leave the church. He started at Willoughby Street, Ebute-Metta, Lagos a housefellowship called, the Glory of God Fellowship. Initially there were nine members but before long the fellowship rapidly grew as the news of the miracles that occurred in their midst spread. 
				</span> 
			</p>
			<a target="_blank" href="http://rccg.org/who-we-are/history/" class="btn btn-danger btn-sm">Read More</a>
			</div>
		</div>
	</div>
	<div class="container" id="mission">
		<h3 class="text-center meet">Our Vision and Mission</h3><br>
		<div class="row">
			<div class="col-md-2 col-sm-4 col-xs-12">&nbsp;</div>
			<div class="col-md-8 col-sm-4 col-xs-12">
				<div class="card">
					<div class="card-header">	
						<img class="rounded mx-auto d-block" draggable="false" src="img/logo.png">
					</div>
					<div class="card-body">
						<p class="vision text-center">1.To make heaven. <br>

						2.To take as many people with us. <br>

						3.To have a member of RCCG in every family of all nations. <br>

						4.To accomplish No. 1 above, holiness will be our lifestyle. <br>

						To accomplish No. 2 and 3 above, we will plant churches within five minutes walking distance in every city and town of developing countries and within five minutes driving distance in every city and town of developed countries. <br>

						We will pursue these objectives until every Nation in the world is reached for the Lord Jesus Christ
					</p>
					</div>
				</div>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-12">&nbsp;</div>
		</div>
	</div><br>
	<h3 class="text-center meet">Worship With Us Today</h3><br>
	<div class="container-fluid come" id="worship">
		<div class="row">
			<div class="container">
				<marquee><h2 class="text-center saving_seat">We're Saving a Seat for You</h2></marquee>	
				<div class="row">

					<div class="col-md-6 col-sm-4 col-xs-12"><br>

						<h3 class="xs">Come and Experience a live Changing Experience in his Presence
							Worship,Praise,Prayer,Thanksgiving and Lots More <br>
						</h3>
						<h3 class="xs">
							Worship with us @ Rccg Miracle Zone Today <br>
							<address>No 12 Malali Street Opposite Godiya Baptist church U/maisamari Malali Kaduna.</address>
						
						</h3>
						<h3 class="xs">
							Tuesdays: Digging Deep(Bible Study 5:30pm)  <br> Thursdays: Faith Clinic(Prayer Meeting 5:30pm) <br> Saturdays: Evangelism(5:00pm)<br> Sunday Service(7:30am)<br>

						</h3>
						<h3 class="xs">
							Come and Experience the Finger of God Every Month as the lord will meet you at the point of your needs. <br>
							(Every Month By 5:30pm)
						</h3>
						<a href="#activities" class=" act btn btn-outline-light">See All Activities</a>
					</div>
					<div class="col-md-6 col-sm-4 col-xs-12">
						 <img img-draggeable="False" class="img-fluid rounded mx-auto d-block " src="img/dm.png">
						 <span class="dgo xs">Welcome, </span> <br>
						 <p class="dgo xs">i hereby welcome you to the Redeemed christian church of God Miracle Zone. May the lord meet you at the point of your need as you worship with us. God Bless you <br> Let Somebody Shout Hallelujah!!  </p>
						
						
					</div>
						</div>
					</div>
				</div><br>
		</div><br>
		<marquee class="marquee">Jesus Christ  the Same yesterday, and to day, and for ever (Hebrews 13:8)</marquee>
	<div class="container animated fadeInUp" id="pastors"><br>
			<h3 class="text-center meet">Meet Our Pastors</h3><br>
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="card">
					<div class="card-body">
						<img class="rounded mx-auto d-block" src="img/daddy.jpg"><br>
						<h4 class="text-center pastor">Pastor EA Adeboye <br> <span class="title">General Overseer</span> </h4>
					</div>
					<div class="card-footer">
						<div class="text-center">
							<a target="_blank" href="#"><img class="icons" src="img/fb.png"></a>
							<a target="_blank" href="#"><img class="icons" src="img/insta.png"></a>
							<a target="_blank" href="#"><img class="icons" src="img/twitter.png"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="card">
					<div class="card-body">
						<img class="rounded mx-auto d-block img-fluid pst1" src="img/pp.jpg"><br>
						<h4 class="text-center pastor">Pastor Oladele Micheal <br> <span class="title">Provincial Pastor</span> </h4>
					</div>
					<div class="card-footer">
						<div class="text-center">
							<a  target="_blank" href="#"><img class="icons" src="img/fb.png"></a>
							<a target="_blank" href="#"><img class="icons" src="img/insta.png"></a>
							<a target="_blank" href="#"><img class="icons" src="img/twitter.png"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="card">
					<div class="card-body">
						<img class="rounded mx-auto d-block img-fluid pst" src="img/pst.jpg"><br>
						<h4 class="text-center pastor">Pastor Robert Oriabure <br> <span class="title">Parish/Zonal Pastor</span> </h4>
					</div>
					<div class="card-footer">
						<div class="text-center">
							<a target="_blank" href="http://facebook.com/robert.odiboh"><img class="icons" src="img/fb.png"></a>
							<a target="_blank" href="#"><img class="icons" src="img/insta.png"></a>
							<a target="_blank" href="#"><img class="icons" src="img/twitter.png"></a>
						</div>
					</div>	
				</div>
			</div>
		</div><br>	
	</div><br><br>	
	<div class="container-fluid bg_img">
		<div class="row">
			<div class="col-md-12 col-sm-4 col-xs-12">
				<img class="rounded mx-auto d-block" src="img/logo.png">
				<h1 class="text-center jesus">Jesus christ <br> the same  yesterday and to day <br> and forever <br> Heb 13:8</h1>
			</div>
		</div>
	</div><br>
	<div class="container " id="activities"><br>	
		<h3 class="text-center meet">Weekly Activities</h3><br>
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="card">
					<div class="card-header">
						<img class="rounded mx-auto d-block symbol" src="img/bible.png">
					</div>
					<div class="card-body">
						<h3 class=" services text-center">Digging Deep</h3>
						<p class="text-center study">Come and Study The Word of God and Enrich your soul </p>
						<h3 class="text-center time2">Every Tuesdays</h3>
					</div>
					<div class="card-footer">
						<h3 class="text-center time">Time: 5:30-6:30pm </h3>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="card">
					<div class="card-header">
						<img class="rounded mx-auto d-block symbol" src="img/pray.png">
					</div>
					<div class="card-body">
						<h3 class=" services	text-center">Prayer Summit</h3>
						<p class="text-center study">Come and join the prayer force and pray out yourself from evil </p>
						<h3 class="text-center time2">Every Wednesdays</h3>
					</div>
					<div class="card-footer">
						<h3 class="text-center time">Time: 5:30-6:30pm </h3>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="card">
					<div class="card-header">
						<img class="rounded mx-auto d-block symbol" src="img/pray.png">
					</div>
					<div class="card-body">
						<h3 class=" services	text-center">Faith Clinic</h3>
						<p class="text-center study">Come and drop you needs  at the feet of Christ through prayers </p>
						<h3 class="text-center time2">Every Thursdays</h3>
					</div>
					<div class="card-footer">
						<h3 class="text-center time">Time: 5:30-6:30pm </h3>
					</div>
				</div>
			</div>
		</div><br>
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="card">
					<div class="card-header">
						<img class="rounded mx-auto d-block symbol" src="img/choir.png">
					</div>
					<div class="card-body">
						<h3 class=" services	text-center">Choir Meeting</h3>
						<p class="text-center study">Come and join in the praising team and be blessed </p>
						<h3 class="text-center time2">Every Saturdays</h3>
					</div>
					<div class="card-footer">
						<h3 class="text-center time">Time: 5:00-6:30pm </h3>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="card">
					<div class="card-header">
						<img class="rounded mx-auto d-block symbol" src="img/eva.png">
					</div>
					<div class="card-body">
						<h3 class=" services	text-center">Evangelism</h3>
						<p class="text-center study">Come and join the evangelism team and be God's Favourite </p>
						<h3 class="text-center time2">Every Saturdays</h3>
					</div>
					<div class="card-footer">
						<h3 class="text-center time">Time: 5:30-6:30pm </h3>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="card">
					<div class="card-header">
						<img class="rounded mx-auto d-block symbol img-rounded" src="img/sun.png">
					</div>
					<div class="card-body">
						<h3 class=" services	text-center">Sunday Service</h3>
						<p class="text-center study">Come and experience  the lifechanging power of praise  </p>
						<h3 class="text-center time2">Every Sunday</h3>
					</div>
					<div class="card-footer">
						<h3 class="text-center time">Time: 7:30</h3>
					</div>
				</div>
			</div>
		</div>
	</div><br><br>
	<div class="container-fluid" id="programmes"><br>
		<h3 class="text-center meet">FInger of God</h3>
		<marquee class="fing">Finger of God is Here Again</marquee>	

		<div class="row">
			<div class="col-md-2 col-sm-4 col-xs-12">&nbsp;</div>
			<div class="col-md-8 col-sm-4 col-xs-12">
				<div class="card">
					<div class="card-body ">
						<img class="img-fluid fig rounded mx-auto d-block" src="img/finger.jpg">
					</div>
					<div class="card-footer">
						<h3 class="text-center time">Time: 5:30-6:30pm Daily</h3>
					</div>
				</div>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-12">
				&nbsp;
			</div>
		</div>
	</div>
		<div class="container" id="contact"><br>
		<h3 class="text-center meet">Contact Us</h3>
		<div class="row">
			<div class="col-md-2 col-sm-4 col-xs-12">&nbsp;</div>
			<div class="col-md-8 col-sm-4 col-xs-12">
				<div class="card">
					<div class="card-body">
						<div class="card-header">
							<h5 class="text-center contact">Feel Free to Contact us</h5><br>
							<img class="rounded mx-auto d-block" src="img/logo.png"><br>
							<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
								<input type="text" class="form-control" name="name" placeholder="Name" value="<?php echo $name; ?>" required><br>
								<input type="text" class="form-control" name="email" placeholder="Email/Phone Number" value="<?php echo $email; ?>" required><br>
								<input type="text" class="form-control" name="subject" placeholder="Subject" value="<?php echo $subject ?>" required><br>
								<textarea  type="text" class="form-control" name="message" placeholder="Enter Message"  required><?php echo $message; ?></textarea><br>
								<input type="submit" name="submit"  value="Send Message" class=" btn btn-outline-success btn-block">
							</form>
						</div>
					</div>
					<div class="card-footer">
						<div class="text-center">
							<a target="_blank" href="http://facebook.com/Rccg-Miracle-Zone-Kaduna-136577813710262/"><img class="icon" src="img/fb.png"></a>
							<a target="_blank" href="#"><img class="icon" src="img/insta.png"></a>
							<a target="_blank" href="#"><img class="icon" src="img/twitter.png"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-12">&nbsp;</div>
		</div>
	</div><br>
	<footer id="footer">
		<div class="container-fluid">
			<div class="row">
				<div class="container"><br>
					<div class="row">
						<div class="col-md-4 col-sm-4 col-xs-12">
						<h2 class="text-center footer_head">Contact</h2>
						<p class="text-center footer_add">No 8 Church Road, U/Maisamari Malali, Kaduna.
							Phone: +234-0-8034501814 <br>
							Email: rccgkd1miracle@gmail.com
						</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<h2 class="text-center footer_head">Connect</h2><br>
							<div class="text-center">
								<a href="http://facebook.com/Rccg-Miracle-Zone-Kaduna-136577813710262/" target="_blank"><img class="icons" src="img/fb.png"></a>
								<a href="#"><img class="icons" src="img/insta.png" target="_blank"></a>
								<a href="#"><img class="icons" src="img/twitter.png" target="_blank"></a>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<h2 class="text-center footer_head">Useful Links</h2>
							<div class="text-center">
								<a href="#programmes">Programmes</a><br>
								<a href="#mission">Mission/Vision</a><br>
								<a href="#activities">Activities</a><br>
								<a target="_blank" href="login.php">Church Portal</a>
							</div>
						</div>
					</div><br>
				</div>
			</div>
		</div>
		<div class="container-fluid last">
			<div class="row">
				<div class="col-md-12 col-sm-4 col-xs-12"><br>
					<div class="text-center">
						&copy; 2019. <b>RCCG</b>- All Rights Reserved. Design by ~ <a href="#">Emeka Iloba ~</a> <br>
						<em>For More Info Call 08185375580</em>
						<a href="#top"><img src="img/top.png"></a>
					</div><br>
				</div><br>
			</div>
		</div>
	</footer>



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
<script type="text/javascript" src="bootstrap/js/jquery.js"></script>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!--ShareThis BEGIN-->
<!--ShareThis END-->

<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=59b6c4433bc6590014ffc442&product=inline-share-buttons"></script>			
</body>
</html>