<?php
// Start the session
session_start();
?>
<?php
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("iandeye",$conn);
		if(isset($_POST['sub']))
		{
			$user=($_POST['uname']);
			$pass=($_POST['pwd']);
			$res=mysql_query("select * from student where username='$user' and password='$pass'");
			if(mysql_fetch_array($res))
			{
				echo "<center>You Have Logged In Successfully</center>";
				$name=$_SESSION['$username'];
				echo $name;
				//add update page
			}
		}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>IandEye &mdash;</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!--
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE
	DESIGNED & DEVELOPED by FREEHTML5.CO

	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.html">I & EYE</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li>
								<a href="login" class="fh5co-sub-ddown">Login</a>
								 <ul class="fh5co-sub-menu">
								 	<li><a href="vollogin.php">As Scribe</a></li>
								 	<li><a href="studLogin.php">As Student</a></li>

								</ul>
							</li>
							<li class="active"><a href="about.html">About</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/cover_bg_2.jpg);">
				<div class="desc animate-box">
					<h2>We Are <strong>Non-profit</strong></h2>
					<span><a class="btn btn-primary btn-lg" href="#">Donate Now</a></span>
				</div>
			</div>

		</div>




		<div id="fh5co-portfolio">
			<div class="container">

				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center heading-section animate-box">
						<h3>Our Gallery</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
					</div>
				</div>
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<!-- <ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
					<li data-target="#myCarousel" data-slide-to="4"></li>
					<li data-target="#myCarousel" data-slide-to="5"></li>
					<li data-target="#myCarousel" data-slide-to="6"></li>
					<li data-target="#myCarousel" data-slide-to="7"></li>
					<li data-target="#myCarousel" data-slide-to="8"></li>
					<li data-target="#myCarousel" data-slide-to="9"></li>
					</ol> -->

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img  class="center-block" src="images/vinod.jpg" alt="bmi"  width="600" height="400">

					</div>

					<div class="item">
						<img  class="center-block" src="images/pic1.jpg" alt="food"  width="600" height="400">


					</div>

					<div class="item">
						<img  class="center-block" src="images/pic2.jpg" alt="heart" width="600" height="400">


					</div>


					<div class="item">
						<img  class="center-block" src="images/pic3.jpg" alt="overweight" width="600" height="400">


					</div>
					<div class="item">
						<img class="center-block"  src="images/pic4.jpg" alt="normalweight" width="600" height="400">


					</div>
					<div class="item">
						<img class="center-block"  src="images/pic5.jpg" alt="obese" width="600" height="400">
				</div>  <!-- My carousel Ends here -->
			</div>
		</div>



		<div id="fh5co-content-section" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Leadership</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="fh5co-team text-center animate-box">
							<figure>
								<img src="images/person_1.jpg" alt="user">
							</figure>

							<div>
								<h3>Jean Doe</h3>
								<p><span>Founder</span></p>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div>

							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-linkedin2"></i></a>
								<a href="#"><i class="icon-facebook3"></i></a>
							</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="fh5co-team text-center animate-box">
							<figure>
								<img src="images/person_2.jpg" alt="user">
							</figure>
							<div>
								<h3>John Doe</h3>
								<p><span>Founder</span></p>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div>
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-linkedin2"></i></a>
								<a href="#"><i class="icon-facebook3"></i></a>
							</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="fh5co-team text-center animate-box">
							<figure>
								<img src="images/person_3.jpg" alt="user">
							</figure>
							<div>
								<h3>John Doe</h3>
								<p><span>Founder</span></p>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div>
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-linkedin2"></i></a>
								<a href="#"><i class="icon-facebook3"></i></a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- fh5co-content-section -->


		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>


	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/sticky.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>

	<!-- Main JS -->
	<script src="js/main.js"></script>

	</body>
</html>
