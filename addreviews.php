<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>AK || UI/UX designer, Full-Stack developer, Teacher</title>
	<meta name="description" content="Bolby - Portfolio/CV/Resume HTML Template">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="./images/uploaded/Aklogo.jpg">

	<!-- STYLESHEETS -->
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/all.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/simple-line-icons.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/slick.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/animate.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="dark">

	<!-- Preloader -->
	<div id="preloader">
		<div class="outer">
			<!-- Google Chrome -->
			<div class="infinityChrome">
				<div></div>
				<div></div>
				<div></div>
			</div>

			<!-- Safari and others -->
			<div class="infinity">
				<div>
					<span></span>
				</div>
				<div>
					<span></span>
				</div>
				<div>
					<span></span>
				</div>
			</div>
			<!-- Stuff -->
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="goo-outer">
				<defs>
					<filter id="goo">
						<feGaussianBlur in="SourceGraphic" stdDeviation="6" result="blur" />
						<feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
						<feBlend in="SourceGraphic" in2="goo" />
					</filter>
				</defs>
			</svg>
		</div>
	</div>

	<!-- mobile header -->
	<header class="mobile-header-1">
		<div class="container">
			<!-- menu icon -->
			<div class="menu-icon d-inline-flex mr-4">
				<button>
					<span></span>
				</button>
			</div>
			<!-- logo image -->
			<div class="site-logo">
				<a href="index.php">
					<img class="logo-img" src="./images/uploaded/Aklogo.jpg" alt="AK logo" />
				</a>
			</div>
		</div>
	</header>

	<!-- desktop header -->
	<header class="desktop-header-1 d-flex align-items-start flex-column">

		<!-- logo image -->
		<div class="site-logo">
			<a href="index-dark.html">
				<img src="./images/uploaded/Aklogo.jpg" alt="Ashwani Kumar" class="logo" />
			</a>
		</div>

		<!-- main menu -->
		<nav>
			<ul class="vertical-menu scrollspy">
				<li class="active"><a href="#home"><i class="icon-home"></i>Home</a></li>
				<li><a href="#about"><i class="icon-user-following"></i>About</a></li>
				<li><a href="#services"><i class="icon-briefcase"></i>Services</a></li>
				<li><a href="#experience"><i class="icon-graduation"></i>Experience</a></li>
				<li><a href="#works"><i class="icon-layers"></i>Works</a></li>
				<li><a href="#blog"><i class="icon-note"></i>Blog</a></li>
				<li><a href="#contact"><i class="icon-bubbles"></i>Contact</a></li>
			</ul>
		</nav>

		<!-- site footer -->
		<div class="footer">
			<!-- copyright text -->
			<span class="copyright">© <?php echo date("Y"); ?> <a href="#"> Ashwani Kumar</a></span>
		</div>

	</header>

	<!-- main layout -->
	<main class="content">

		<!-- section home -->
		<section id="home" class="home d-flex align-items-center">
			<div class="container">

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	include("./include/db_connect.php");
$r_name = $_POST['r_name'];
$who = $_POST['who'];
$review = $_POST['review'];

$sql = "INSERT INTO `reviews` (`r_name`, `who`, `review`) VALUES ('$r_name', '$who', '$review')";
    $result = mysqli_query($conn, $sql);  

if($result){

    echo '<script>alert(" ❤ Thank You ❤ So much for Your Contribution 👌.")</script>';
}
else {
    echo '<script>alert("Holly Crab 😧😦 My Code Giving you a F🤬🤬king Error While Your Precious Review... Contact me I am Gonna fix that.")</script>';
    
}


}

?>





		<!-- section contact -->
		<section id="contact">

			<div class="container">

				<!-- section title -->
				<h2 class="section-title wow fadeInUp">Say Something About ME.....</h2>

				<div class="spacer" data-height="60"></div>

				<div class="row">

					<div class="col-md-4">
						<!-- contact info -->
						<div class="contact-info">
							<h3 class="wow fadeInUp">Let's talk about My Work!</h3>
						</div>
					</div>

					<div class="col-md-8">
						<!-- Contact Form -->
						<form id="" class="contact-form mt-6" method="post">

							<div class="messages"></div>

							<div class="row">
								<div class="column col-md-6">
									<!-- Name input -->
									<div class="form-group">
										<input type="text" class="form-control" name="r_name" id="r_name" placeholder="Your Name" required="required" data-error="Name is required.">
										<div class="help-block with-errors"></div>
									</div>
								</div>

								<div class="column col-md-12">
									<!-- Email input -->
									<div class="form-group">
										<input type="text" class="form-control" id="who" name="who" list="whour" placeholder="Who Are You" required="required" data-error="Who Are You is required.">
										<div class="help-block with-errors"></div>
                                        <datalist id="whour">
                                        <option value="Other"></option>
                                            <option value="My Student"></option>
                                            <option value="My Clients"></option>
                                        </datalist>
									</div>
								</div>
								<div class="column col-md-12">
									<!-- Message textarea -->
									<div class="form-group">
										<textarea name="review" id="review" class="form-control" rows="5" placeholder="Say Something About ME...." required="required" data-error="Message is required."></textarea>
										<div class="help-block with-errors"></div>
									</div>
								</div>
							</div>

							<button type="submit"  class="btn btn-default">Send Message</button><!-- Send Button -->

						</form>
						<!-- Contact Form end -->
					</div>

				</div>

			</div>

		</section>

		<div class="spacer" data-height="96"></div>

	</main>

	<!-- Go to top button -->
	<a href="javascript:" id="return-to-top"><i class="fas fa-arrow-up"></i></a>

	<!-- SCRIPTS -->
	<script src="js/jquery-1.12.3.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/infinite-scroll.min.js"></script>
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/contact.js"></script>
	<script src="js/validator.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/morphext.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/custom.js"></script>

</body>

</html>