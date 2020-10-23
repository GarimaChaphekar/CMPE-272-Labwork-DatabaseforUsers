<?php
session_start();
include("includes/db.php");
include("functions/functions.php");

?>


<!DOCTYPE html>
<html>

<head>
	<title>URBANISTA</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles/style.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
	<div id="top">
		<!--Top Bar Start -->
		<div class="container">
			<!--container Start -->
			<div class="col-md-6 offer">
				<!--col-md-6 offer Start -->
				<a href="#" class="btn btn-success btn-sm">
				<?php
						if(!isset($_SESSION['customer_email'])){
							echo "Welcome Guest";
						} else{
							echo "Welcome: " .$_SESSION['customer_email'] . "";
						}
						?>
				</a>

				<a href="#">Shopping Cart Total Price: $ , Total Items </a>

			</div>
			<!--col-md-6 offer Start -->

			<div class="col-md-6">
				<ul class="menu">
					<li>
						<a href="customer_registration.php"> Register</a>
					</li>

					<li>
						<a href="#"> My Account</a>
					</li>

					<li>
						<a href="#"> Goto Cart</a>
					</li>

					<li>
					<?php
							if(!isset($_SESSION['customer_email'])){
								echo "<a href='checkout.php'>Login</a>";
							} else{
								echo "<a href='logout.php'>Logout</a>";
							}
							?>
					</li>
				</ul>

			</div>


		</div>
		<!--container End -->


	</div>
	<!--Top Bar End -->

	<div class="navbar navbar-default" id="navbar">
		<!--navbar navbar-default start -->
		<div class="container">
			<div class="navbar-header">
				<!--navbar-header start -->
				<a class="navbar-brand home" href="index.php">
					<img src="images/logo.jpg" alt="Shopping" class="hidden-xs">
					<img src="images/logo.jpg" alt="Shopping" class="visible-xs">
				</a>

				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
					<span class="sr-only"> Toggle Navigation</span>
					<i class="fa fa-align-justify"> </i>
				</button>

				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
					<span class="sr-only"></span>
					<i class="fa fa-search"></i>
				</button>
			</div>
			<!--navbar-header start -->

			<div class="navbar-collapse collapse" id="navigation">
				<!--navbar-collapse collapse start -->
				<div class="padding-nav">
					<!--padding-nav start -->
					<ul class="nav navbar-nav navbar-left">
						<li class="active">
							<a href="#">Home</a>
						</li>
						<li>
							<a href="shop.php"> Shop</a>
						</li>
						<li>
							<a href="#"> Checkout</a>
						</li>
						<li>
							<a href="#"> About Us</a>
						</li>

						<li>
							<a href="#"> Services</a>
						</li>

						<li>
							<a href="#"> Contact Us</a>
						</li>

					</ul>
				</div>
				<!--padding-nav start -->
				<a href="#" class="btn btn-primary navbar-btn right">
					<i class="fa fa-shopping-cart"></i>
					<span> items In Cart</span>
				</a>


				<div class="navbar-collapse collapse right">
					<!--navbar-collapse collapse-right start -->
					<button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
						<span class="sr-only"> Toggle Search</span>
						<i class="fa fa-search"></i>
					</button>
				</div>
				<!--navbar-collapse collapse-right End -->

				<div class="collapse clearfix" id="search">

					<form class="navbar-form" method="get" action="search.php">
						<div class="input-group">
							<input type="text" name="user_query" placeholder="Search" class="form-control" required="">
							<span class="input-group-btn">
								<button type="submit" value="Search" name="search" class="btn btn-primary">
									<i class="fa fa-search"></i>
								</button>
							</span>
						</div>

					</form>
				</div>

			</div>
			<!--navbar-collapse collapse End -->

		</div>


	</div>
	<!--navbar navbar-default End -->



	<div class="container" id="slider">
		<!--Conatiner Start-->
		<div class="col-md-12">
			<!--col-md-12 Start-->
			<div class="carousel slide" id="myCarousel" data-ride="carousel">
				<!--carousel slide Start-->
				<ol class="carousel-indicators">
					<li data-target="myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="myCarousel" data-slide-to="1"></li>
					<li data-target="myCarousel" data-slide-to="2"></li>
					<li data-target="myCarousel" data-slide-to="3"></li>
				</ol>

				<div class="carousel-inner">
					<div class="item active">
						<img src="admin_area/slider_images/9.jpg">
					</div>
					<div class="item ">
						<img src="admin_area/slider_images/8.jpg">
					</div>
					<div class="item ">
						<img src="admin_area/slider_images/6.jpg">
					</div>
					<div class="item ">
						<img src="admin_area/slider_images/7.jpg">
					</div>



				</div>
				<!--carousel-inner End-->


				<a href="#myCarousel" class="left carousel-control" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>

				</a>

				<a href="#myCarousel" class="right carousel-control" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>

				</a>
			</div>
			<!--carousel slide End-->
		</div>
		<!--col-md-12 End-->

	</div>
	<!--Conatiner End-->
	<div id="advantage">
		<!--advantage Start-->
		<div class="container">
			<!--container Start-->
			<div class="same-height-row">
				<!--same-height-row Start-->
				<div class="col-sm-4">
					<!--col-sm-4 Start-->
					<div class="box same-height">
						<!--box same-height Start-->
						<div class="icon">
							<i class="fa fa-heart"></i>
						</div>
						<h3><a href="#"> Free Shipping </h3>
						<br>

						<p>For all orders over 99$ </p>
					</div>
					<!--box same-height Start-->
				</div>
				<!--col-sm-4 Start-->

				<div class="col-sm-4">
					<!--col-sm-4 Start-->
					<div class="box same-height">
						<!--box same-height Start-->
						<div class="icon">
							<i class="fa fa-heart"></i>
						</div>
						<h3><a href="#"> Free and Easy Returns </h3>
						<p>Hassle Free Returns and money back gurantee</p>
					</div>
					<!--box same-height Start-->
				</div>
				<!--col-sm-4 Start-->

				<div class="col-sm-4">
					<!--col-sm-4 Start-->
					<div class="box same-height">
						<!--box same-height Start-->
						<div class="icon">
							<i class="fa fa-heart"></i>
						</div>
						<h3><a href="#">
								WE LOVE OUR CUSTOMERS</h3>
						<p>24/7 Online SUPPORT</p>
					</div>
					<!--box same-height Start-->
				</div>
				<!--col-sm-4 Start-->


			</div>
			<!--same-height-row End-->
		</div>
		<!--container End-->

	</div>
	<!--advantage End-->

	<div id="hot">
		<!--hot Start-->
		<div class="box">
			<div class="container">
				<div class="col-md-12">
					<h2>Featured & Trending Products</h2>
				</div>
			</div>
		</div>
	</div>
	<!--hot End-->
	<div id="content" class="container">
		<div class="row">
			<div class="col-sm-4 col-sm-6 single">
				<div class="product">
					<a href="#">
						<img src="admin_area/product_images/122.jpg" class="img-responsive">
					</a>
					<div class="text">
						<h3><a href="#">Polka Dot Skirt</a></h3>
						<p class="price">$ 20</p>
						<p class="button">
							<a href="#" class="btn btn-default">View Details</a>
							<a href="#" class="btn btn-primary">
								<i class="fa fa-shopping-cart"></i> Add to Cart
							</a>
						</p>
					</div>

				</div>


			</div>
			<div class="col-sm-4 col-sm-6 single">
				<div class="product">
					<a href="#">
						<img src="admin_area/product_images/121.jpg" class="img-responsive">
					</a>
					<div class="text">
						<h3><a href="#">Rose Bold Sweater</a></h3>
						<p class="price"> $ 60</p>
						<p class="button">
							<a href="#" class="btn btn-default">View Details</a>
							<a href="#" class="btn btn-primary">
								<i class="fa fa-shopping-cart"></i> Add to Cart
							</a>
						</p>
					</div>

				</div>


			</div>
			<div class="col-sm-4 col-sm-6 single">
				<div class="product">
					<a href="#">
						<img src="admin_area/product_images/5393319800_2_2_1-1024x1308.jpg" class="img-responsive">
					</a>
					<div class="text">
						<h3><a href="#">Summer Floret Dress</a></h3>
						<p class="price">$ 35</p>
						<p class="button">
							<a href="#" class="btn btn-default">View Details</a>
							<a href="#" class="btn btn-primary">
								<i class="fa fa-shopping-cart"></i> Add to Cart
							</a>
						</p>
					</div>

				</div>


			</div>
			<div class="col-sm-4 col-sm-6 single">
				<div class="product">
					<a href="#">
						<img src="admin_area/product_images/9393313800_2_2_1-1024x1308.jpg" class="img-responsive">
					</a>
					<div class="text">
						<h3><a href="#">Black Skater Dress</a></h3>
						<p class="price"> $ 35</p>
						<p class="button">
							<a href="#" class="btn btn-default">View Details</a>
							<a href="#" class="btn btn-primary">
								<i class="fa fa-shopping-cart"></i> Add to Cart
							</a>
						</p>
					</div>

				</div>


			</div>
		</div>
	</div>


<!--Footer Start-->
<?php 
include("includes/footer.php");
 ?>

<!--Footer End-->

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>

</html>