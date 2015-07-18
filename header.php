<?php 
include 'connect.php';
?>
<DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
</head>

<body>
	<header id="header navbar-header">
		<div class="header_top ">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> 8670864497</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> kumarneetesh24@gmail.com</a></li>
							</ul>						
						</div>
					</div>
                    <div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-tabs">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="header-middle">
		  <div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="pull-right">
						<h4><span>MY</span>-SHOP</h4>
					</div>
				</div>
				<div class="col-sm-9">
					<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
					</div>
				</div>
			</div>
		   </div>
		</div>

		<div class="header-bottom">
			<div class="container">
				<div class="row">
				    <div class="col-sm-7">
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.html" class="active">HOME</a></li>
								<li class="dropdown"><a href="shop.html">SHOP<i class="fa fa-angle-down"></i></a>
								   <ul role="menu" class="sub-menu">
								   	<li><a href="shop.html">Products</a></li>
										<li><a href="checkout.html">Checkout</a></li> 
										<li><a href="cart.html">Cart</a></li> 
										<li><a href="login.html">Login</a></li> 
								   </ul>
								   </li>
                                <li><a href="contact-us.html">CONTACT US</a></li>
							</ul>							
						</div>
						
					</div>
					<div class="col-sm-5">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	Range
	<form action="range.php" method="post">
  <input type="checkbox" name="price" value="5k-10k" /> 5k-10k<br>
  <input type="checkbox" name="price" value="10k-15k" /> 10k-15k<br>
  <input type="checkbox" name="price" value="15k-20k" /> 15k-20k<br>
   <input type="submit" value="submit" />
      </form>
<br>
	Company
    <form action="company.php" method="post">
  <input type="checkbox" name="company" value="HP" /> HP<br>
  <input type="checkbox" name="company" value="Acer" /> Acer<br>
  <input type="checkbox" name="company" value="Sony" /> Sony<br>
   </form>
   <br>

   Product
   <form action="product.php" method="post">
  <input type="checkbox" name="product" value="Mobiles" /> Mobiles<br>
  <input type="checkbox" name="product" value="Laptops" /> Laptops<br>
  <input type="checkbox" name="product" value="Accessories" /> Accessories<br>
   </form>

<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>MY</span>-SHOP</h2>
							<p>Online shopping website for desktop,mobile and laptops</p>
						</div>
					</div>
					<div class="col-sm-4 pull-right">
						<div class="single-widget">
							<h2>ABOUT SHOP</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br/>our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
				</div>
            </div>
        </footer>     
	 <script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>