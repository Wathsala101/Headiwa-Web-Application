<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>MarketPlace</title>
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
	<!--//end-animate-->
</head>

<body>
	<?php include('includes/header.php'); ?>
	<!--- banner ---->
	<div class="banner-3">
	<div class="container">

<h1 class="wow zoomIn animated animated" data-wow-delay=".5s"
	style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"><b>හෙළදිව - MarketPlace<b></h1>
	<a href="admin/create-item-user.php"><button name="search" type="submit" class="searchButton">
				<i class="fa fa-plus-circle"></i>
			</button>&nbsp;Click to add your items&nbsp;</a>
</div>
	</div>


	<!--- /banner ---->



	<!--- rooms ---->
	<div class="rooms">
		<div class="container">

			<div class="room-bottom">


				<div class="wrap">
					<form action="pack01.php" method="post">
						<div class="search">
							<input type="text" class="searchTerm" name="valueToSearch" placeholder="සොයන්න">
							<button name="search" type="submit" class="searchButton">
								<i class="fa fa-search"></i>
							</button>

						</div>
					</form>
				</div>


				<style>
					@import url(https://fonts.googleapis.com/css?family=Open+Sans);

					body {
						background: #f2f2f2;
						font-family: 'Open Sans', sans-serif;
					}

					.search {
						width: 100%;
						position: relative;
						display: flex;
					}

					.searchTerm {
						width: 100%;
						border: 3px solid #34AD54;
						border-right: none;
						padding: 5px;
						height: 36px;
						border-radius: 5px 0 0 5px;
						outline: none;
						color: #9DBFAF;
					}

					.searchTerm:focus {
						color: #34AD54;
					}

					.searchButton {
						width: 40px;
						height: 36px;
						border: 1px solid #34AD54;
						background: #34AD54;
						text-align: center;
						color: #fff;
						border-radius: 0 5px 5px 0;
						cursor: pointer;
						font-size: 20px;
					}

					/*Resize the wrap to see the search bar change!*/
					.wrap {
						width: 30%;
						position: absolute;
						top: 50%;
						left: 50%;
						transform: translate(-50%, -50%);
					}
				</style>





				<style>
					.filter {
						background: white;
						border-radius: 5%;
						border: 1px solid blue;
						width: 300px;

					}

					button:hover {
						background-color: #FF9933;
						color: white;
					}

					filter:hover {
						background-color: #FF9933;
						color: black;
					}

					.search {
						width: 100%;
						position: relative;
						display: flex;
					}

					.search-field {
						width: 100%;
						border: 3px solid #34AD54;
						border-right: none;
						padding: 5px;
						height: 20px;
						border-radius: 5px 0 0 5px;
						outline: none;
						color: #9DBFAF;


					}

					.search-btn {
						width: 30px;
						height: 36px;
						border: 1px solid #34AD54;
						background: #34AD54;
						text-align: center;
						color: #fff;
						border-radius: 0 5px 5px 0;
						cursor: pointer;
						font-size: 20px;

					}
				</style>
				
				<div></div>
				

				<?php

                            if(isset($_POST['search'])){
                                $searchVal = $_POST['valueToSearch'];
                                if($searchVal != ''){
                                    $sql = "SELECT * from `tblmarket` WHERE `ProductName` LIKE '%$searchVal%' OR `ProductType` LIKE '%$searchVal%'";
                                } else{
                                    $sql = "SELECT * from tblmarket";
                                }
                            }else{
                                $sql = "SELECT * from tblmarket";
                            }


                            $query = $dbh -> prepare($sql);
                            //$query -> bindParam(':city', $city, PDO::PARAM_STR);
                            $query->execute();
                            $results=$query->fetchAll(PDO::FETCH_OBJ);
                            $cnt=1;
                            if($query->rowCount() > 0)
                            {
                                foreach($results as $result)
                                {				?>
						<div class="rom-btm">
							<div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
								<img src="admin/pacakgeimages/<?php echo htmlentities($result->ProductImage); ?>"
									class="img-responsive" alt="">
							</div>
							<div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
								<h4>Product Name:
									<?php echo htmlentities($result->ProductName); ?>
								</h4>
																
								<p><b>Seller Details :</b>
									<?php echo htmlentities($result->SellerDetails); ?>
								</p>
								<p><b>Contact No:</b>
									<?php echo htmlentities($result->ProductFeatures); ?>
								</p>
							</div>
							<div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
								<h5>Rs.
									<?php echo htmlentities($result->ProductPrice); ?>
								</h5>
								<a href="product-details.php?pkgid=<?php echo htmlentities($result->ProductId); ?>"
									class="view">Details</a>
							</div>
							<div class="clearfix"></div>
						</div>

					<?php }
				} ?>



			</div>
		</div>
	</div>
	<!--- /rooms ---->

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