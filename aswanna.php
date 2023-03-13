<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Agrimentor</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">



	<style>
		* {
			box-sizing: border-box
		}

		body {
			font-family: Arial, Helvetica, sans-serif;
		}

		.navbar01 {
			width: 100%;
			background-color: #555;
			overflow: auto;
		}

		.navbar01 a {
			float: left;
			padding: 12px;
			color: white;
			text-decoration: none;
			font-size: 17px;
			width: 25%;
			/* Four links of equal widths */
			text-align: center;
		}

		.navbar01 a:hover {
			background-color: #000;
		}

		.navbar01 a.active {
			background-color: #04AA6D;
		}

		@media screen and (max-width: 500px) {
			.navbar01 a {
				float: none;
				display: block;
				width: 100%;
				text-align: left;
			}
		}
	</style>

	<meta charset="utf-8">
	<title>අස්වැන්න</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script
		type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- Custom Theme files -->
	<script src="js/jquery-1.12.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!--animate-->
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">

	<script src="js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>



</head>

<body>
	<?php include('includes/header.php'); ?>
	<!--- banner ---->
	<div class="banner-3">
		<div class="container">
			<h1 class="wow zoomIn animated animated" data-wow-delay=".5s"
				style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"><b>අස්වැන්න<b></h1>
		</div>
	</div>
	<div class="navbar01">
		<a href="agri/blog.html">අස්වැන්න Blog</a>
		<a href="agri/video.html">වගා Video</a>
		<a href="agri/product.html">වගා උපදේශන</a>
		<a href="agri/steam.html">සාර්ථක වාගාකරුවන්</a>
	</div>

	<!--- /banner ---->
	<!--- rooms ---->

	<body>
		<!-- Topbar Start -->

		<!-- Topbar End -->


		<!-- Navbar Start -->

		<div class="container-fluid about pt-5">
			<div class="container">
				<div class="row gx-5">
					<div class="col-lg-6 mb-5 mb-lg-0">
						<div class="d-flex h-100 border border-0 border-primary border-bottom-0 pt-4">
							<img class="img-fluid mt-auto mx-auto" src="agri/img/aboutNew.png">
						</div>
					</div>
					<div class="col-lg-6 pb-5">
						<div class="mb-3 pb-2">
							<h1 class="text-primary text-uppercase"><b>අපි ගැන<b></h1>

						</div>
						<br>
						<p class="mb-4">ග්‍රාමීය කෘෂි ආර්ථිකය ඉහළ නැංවීම රටක සංවර්ධනයේ පළමු පියවරයි. විශේෂයෙන්
							කෘෂිකාර්මික රටක් වූ ශ්‍රී ලංකාවේ සංවර්ධන අඩිතාලම මින් ආරම්භ කිරීම සංවර්ධන ක්‍රියාවලියේ ඉතා
							අත්‍යවශ්‍ය අංශයකි.එබැවින් අස්වැන්නේ අපි, සාර්තක වගාවක් සිදු කරන ආකාරය
							ගැන ඔබට මාර්ගය පෙන්වන්නෙමු.</p>
						<div class="row gx-5 gy-4">
							<div class="col-sm-6">
								<i class="fa fa-seedling display-1 text-secondary"></i>
								<h4><b>100% කාබනික වගාව<b></h4>
								<p class="mb-0">දේශගුණික විපර්යාස හමුවේ කෘෂි කර්මාන්තය සාර්ථකව පවත්වාගෙන යාම සඳහා තිරසාර
									විසඳුමක් වශයෙන් කාබනික කෘෂි කර්මාන්තය හැඳින්විය හැක.<br><br> එබැවින් සාර්තක වගාවක්
									සදහා කාබනික වගාවක් කරන ආකාරය ගැන අප, ඔබ දැනුවත් කරන්නෙමු.</p>
							</div>
							<div class="col-sm-6">
								<i class="fa fa-award display-1 text-secondary"></i>
								<h4><b>සාර්තක වාගාකරුවන් ඇගයීම<b></h4>
								<p class="mb-0">අස්වැන්න වියපෘතියේ ප්‍රතිපලයක් ලෙස, සාර්තක වගා කරුවන් ඇගයීමේ
									ක්‍රියාවලියක් අප ආරම්භ කර ඇත. </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Navbar End -->
		

		<!-- Blog Start -->

		<!--- /footer-top ---->
		<?php include('includes/footer.php'); ?>
		<!-- signup -->
		<?php include('includes/signup.php'); ?>
		<!-- //signu -->
		<!-- signin -->
		<?php include('includes/signin.php'); ?>
		<!-- //signin -->
		<!-- write us -->
		<?php include('includes/write-us.php'); ?>
		<!-- //write us -->
	</body>

</html>