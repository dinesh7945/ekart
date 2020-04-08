<?php

// if session start 
@session_start();
include "header.php";
include "includes/db.php";
include "functions.php";



// getting ip address
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Ekart</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<!--Less styles -->
	<!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
	<script src="themes/js/less.js" type="text/javascript"></script> -->

	<!-- Bootstrap style -->
	<link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen" />
	<link href="themes/css/base.css" rel="stylesheet" media="screen" />
	<!-- Bootstrap style responsive -->
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
	<!-- Google-code-prettify -->
	<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet" />
	<!-- fav and touch icons -->
	<link rel="shortcut icon" href="themes/images/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
</head>

<body>

	<!-- Header End====================================================================== -->
	<div id="mainBody">
		<div class="container">
			<div class="row">
				<!-- Sidebar ================================================== -->
				<div id="sidebar" class="span3">

					<div class="well well-small"><a id="myCart" href="product_summary.html"><img src="themes/images/ico-cart.png" alt="cart">3 Items in your cart <span class="badge badge-warning pull-right">$155.00</span></a></div>
					<ul id="sideManu" class="nav nav-tabs nav-stacked">

						<li class="subMenu open"><a> ELECTRONICS [230]</a>
							<ul>
								<li><a class="active" href="products.html"><i class="icon-chevron-right"></i>Cameras (100) </a></li>
								<li><a href="products.html"><i class="icon-chevron-right"></i>Computers, Tablets & laptop (30)</a></li>
								<li><a href="products.html"><i class="icon-chevron-right"></i>Mobile Phone (80)</a></li>
								<li><a href="products.html"><i class="icon-chevron-right"></i>Sound & Vision (15)</a></li>
							</ul>
						</li>
						<li class="subMenu"><a> CLOTHES [840] </a>
							<ul style="display:none">
								<li><a href="products.html"><i class="icon-chevron-right"></i>Women's Clothing (45)</a></li>
								<li><a href="products.html"><i class="icon-chevron-right"></i>Women's Shoes (8)</a></li>
								<li><a href="products.html"><i class="icon-chevron-right"></i>Women's Hand Bags (5)</a></li>
								<li><a href="products.html"><i class="icon-chevron-right"></i>Men's Clothings (45)</a></li>
								<li><a href="products.html"><i class="icon-chevron-right"></i>Men's Shoes (6)</a></li>
								<li><a href="products.html"><i class="icon-chevron-right"></i>Kids Clothing (5)</a></li>
								<li><a href="products.html"><i class="icon-chevron-right"></i>Kids Shoes (3)</a></li>
							</ul>
						</li>
						<li class="subMenu"><a>FOOD AND BEVERAGES [1000]</a>
							<ul style="display:none">
								<li><a href="products.html"><i class="icon-chevron-right"></i>Angoves (35)</a></li>
								<li><a href="products.html"><i class="icon-chevron-right"></i>Bouchard Aine & Fils (8)</a></li>
								<li><a href="products.html"><i class="icon-chevron-right"></i>French Rabbit (5)</a></li>
								<li><a href="products.html"><i class="icon-chevron-right"></i>Louis Bernard (45)</a></li>
								<li><a href="products.html"><i class="icon-chevron-right"></i>BIB Wine (Bag in Box) (8)</a></li>
								<li><a href="products.html"><i class="icon-chevron-right"></i>Other Liquors & Wine (5)</a></li>
								<li><a href="products.html"><i class="icon-chevron-right"></i>Garden (3)</a></li>
								<li><a href="products.html"><i class="icon-chevron-right"></i>Khao Shong (11)</a></li>
							</ul>
						</li>
						<li><a href="products.html">HEALTH & BEAUTY [18]</a></li>
						<li><a href="products.html">SPORTS & LEISURE [58]</a></li>
						<li><a href="products.html">BOOKS & ENTERTAINMENTS [14]</a></li>
					</ul>
					<br />
					<div class="thumbnail">
						<img src="themes/images/products/panasonic.jpg" alt="Bootshop panasonoc New camera" />
						<div class="caption">
							<h5>Panasonic</h5>
							<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
						</div>
					</div><br />
					<div class="thumbnail">
						<img src="themes/images/products/kindle.png" title="Bootshop New Kindel" alt="Bootshop Kindel">
						<div class="caption">
							<h5>Kindle</h5>
							<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
						</div>
					</div><br />
					<div class="thumbnail">
						<img src="themes/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
						<div class="caption">
							<h5>Payment Methods</h5>
						</div>
					</div>
				</div>
				<!-- Sidebar end=============================================== -->
				<div class="span9">
					<ul class="breadcrumb">
						<li><a href="index.html">Home</a> <span class="divider">/</span></li>
						<li class="active">Login</li>
					</ul>
					<h3> Login</h3>
					<hr class="soft" />

					<div class="row">
						<!-- <div class="span4">
							<div class="well">
								<h5>CREATE YOUR ACCOUNT</h5><br />
								Enter your e-mail address to create an account.<br /><br /><br />
								<form action="register.html">
									<div class="control-group">
										<label class="control-label" for="inputEmail0">E-mail address</label>
										<div class="controls">
											<input class="span3" type="text" id="inputEmail0" placeholder="Email">
										</div>
									</div>
									<div class="controls">
										<button type="submit" class="btn block">Create Your Account</button>
									</div>
								</form>
							</div>
						</div> -->


						<div class="span1"> &nbsp;</div>
						<div class="span4">
							<div class="well">
								<h5>ALREADY REGISTERED ?</h5>
								<?php


								// NC
								// session_start();
								@session_start();
								include "includes/db.php";



								?>
								<form action="checkout.php" method="POST">
									<div class="control-group">
										<label class="control-label" for="inputEmail1">Email</label>
										<div class="controls">
											<input class="span3" type="text" name="c_email" id="inputEmail1" placeholder="Email">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="inputPassword1">Password</label>
										<div class="controls">
											<input type="password" class="span3" name="c_pass" id="inputPassword1" placeholder="Password">
										</div>
									</div>
									<div class="control-group">
										<div class="controls">
											<button type="submit" name="c_login" class="btn">Sign in</button> <a href="forgetpass.html">Forget password?</a>
										</div>
									</div>

								</form>
								<div class="controls" style="text-align: right;">
									<a href="register.php"><button type="submit" class="btn block">Create Your Account</button></a>
								</div>

								<!-- if c->login -->
								<?php

								// if (isset($_POST['c_login'])) {
								if (isset($_POST['c_email'])) {

									$customer_email = $_POST['c_email'];
									$customer_pass = $_POST['c_pass'];



									// query tht match wiht inserted data in customer
									$sel_customer = "SELECT * FROM customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";


									$run_customer = mysqli_query($con, $sel_customer);

									// new code start here
									$check_customer = mysqli_num_rows($run_customer);

									$get_ip = getrealipaddres();

									$sel_cart = "SELECT * FROM cart where ip_add = '$get_ip'";


									$run_cart = mysqli_query($con, $sel_cart);

									$check_cart = mysqli_num_rows($run_cart);

									if ($check_customer == 0) {
										echo "<script>alert('email or password is wrong, try again!')</script>";
										exit();
									}
									if ($check_customer == 1 and $check_cart == 0) {

										$_SESSION['customer_email'] = $customer_email;


										echo "<script>window.open('account.php','_self')</script>";
									} else {
										$_SESSION['customer_email'] = $customer_email;

										echo "<script>alert('You Successfully logged in!')</script>";
										echo "<script>window.open('index.php','_self')</script>";
										// echo "<script>window.open('payment_option.php','_self')</script>";
									}
									// ends here


									// when email nd password match then it will redirect to payment page

									// 	if (mysqli_num_rows($run_customer) > 0) {

									// 		$_SESSION['customer_email'] = $customer_email;

									// 		echo "<script>window.open('payment_option.php','_self')</script>";
									// 	} else {

									// 		echo "<script>alert('email or password is wrong, try again!')</script>";
									// 	}
								}

								?>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- MainBody End ============================= -->

	<!-- Footer ================================================================== -->
	<div id="footerSection">
		<div class="container">
			<div class="row">
				<div class="span3">
					<h5>ACCOUNT</h5>
					<a href="login.html">YOUR ACCOUNT</a>
					<a href="login.html">PERSONAL INFORMATION</a>
					<a href="login.html">ADDRESSES</a>
					<a href="login.html">DISCOUNT</a>
					<a href="login.html">ORDER HISTORY</a>
				</div>
				<div class="span3">
					<h5>INFORMATION</h5>
					<a href="contact.html">CONTACT</a>
					<a href="register.html">REGISTRATION</a>
					<a href="legal_notice.html">LEGAL NOTICE</a>
					<a href="tac.html">TERMS AND CONDITIONS</a>
					<a href="faq.html">FAQ</a>
				</div>
				<div class="span3">
					<h5>OUR OFFERS</h5>
					<a href="#">NEW PRODUCTS</a>
					<a href="#">TOP SELLERS</a>
					<a href="special_offer.html">SPECIAL OFFERS</a>
					<a href="#">MANUFACTURERS</a>
					<a href="#">SUPPLIERS</a>
				</div>
				<div id="socialMedia" class="span3 pull-right">
					<h5>SOCIAL MEDIA </h5>
					<a href="#"><img width="60" height="60" src="themes/images/facebook.png" title="facebook" alt="facebook" /></a>
					<a href="#"><img width="60" height="60" src="themes/images/twitter.png" title="twitter" alt="twitter" /></a>
					<a href="#"><img width="60" height="60" src="themes/images/youtube.png" title="youtube" alt="youtube" /></a>
				</div>
			</div>
			<p class="pull-right">&copy; Bootshop</p> -->

		</div>
		<!-- Container End -->
	</div>
	<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="themes/js/jquery.js" type="text/javascript"></script>
	<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="themes/js/google-code-prettify/prettify.js"></script>

	<script src="themes/js/bootshop.js"></script>
	<script src="themes/js/jquery.lightbox-0.5.js"></script>

	<!-- Themes switcher section ============================================================================================= -->
	<div id="secectionBox">
		<link rel="stylesheet" href="themes/switch/themeswitch.css" type="text/css" media="screen" />
		<script src="themes/switch/theamswitcher.js" type="text/javascript" charset="utf-8"></script>
		<div id="themeContainer">
			<div id="hideme" class="themeTitle">Style Selector</div>
			<div class="themeName">Oregional Skin</div>
			<div class="images style">
				<a href="themes/css/#" name="bootshop"><img src="themes/switch/images/clr/bootshop.png" alt="bootstrap business templates" class="active"></a>
				<a href="themes/css/#" name="businessltd"><img src="themes/switch/images/clr/businessltd.png" alt="bootstrap business templates" class="active"></a>
			</div>
			<div class="themeName">Bootswatch Skins (11)</div>
			<div class="images style">
				<a href="themes/css/#" name="amelia" title="Amelia"><img src="themes/switch/images/clr/amelia.png" alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="spruce" title="Spruce"><img src="themes/switch/images/clr/spruce.png" alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="superhero" title="Superhero"><img src="themes/switch/images/clr/superhero.png" alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="cyborg"><img src="themes/switch/images/clr/cyborg.png" alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="cerulean"><img src="themes/switch/images/clr/cerulean.png" alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="journal"><img src="themes/switch/images/clr/journal.png" alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="readable"><img src="themes/switch/images/clr/readable.png" alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="simplex"><img src="themes/switch/images/clr/simplex.png" alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="slate"><img src="themes/switch/images/clr/slate.png" alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="spacelab"><img src="themes/switch/images/clr/spacelab.png" alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="united"><img src="themes/switch/images/clr/united.png" alt="bootstrap business templates"></a>
				<p style="margin:0;line-height:normal;margin-left:-10px;display:none;"><small>These are just examples and you can build your own color scheme in the backend.</small></p>
			</div>
			<div class="themeName">Background Patterns </div>
			<div class="images patterns">
				<a href="themes/css/#" name="pattern1"><img src="themes/switch/images/pattern/pattern1.png" alt="bootstrap business templates" class="active"></a>
				<a href="themes/css/#" name="pattern2"><img src="themes/switch/images/pattern/pattern2.png" alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="pattern3"><img src="themes/switch/images/pattern/pattern3.png" alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="pattern4"><img src="themes/switch/images/pattern/pattern4.png" alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="pattern5"><img src="themes/switch/images/pattern/pattern5.png" alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="pattern6"><img src="themes/switch/images/pattern/pattern6.png" alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="pattern7"><img src="themes/switch/images/pattern/pattern7.png" alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="pattern8"><img src="themes/switch/images/pattern/pattern8.png" alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="pattern9"><img src="themes/switch/images/pattern/pattern9.png" alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="pattern10"><img src="themes/switch/images/pattern/pattern10.png" alt="bootstrap business templates"></a>

				<a href="themes/css/#" name="pattern11"><img src="themes/switch/images/pattern/pattern11.png" alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="pattern12"><img src="themes/switch/images/pattern/pattern12.png" alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="pattern13"><img src="themes/switch/images/pattern/pattern13.png" alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="pattern14"><img src="themes/switch/images/pattern/pattern14.png" alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="pattern15"><img src="themes/switch/images/pattern/pattern15.png" alt="bootstrap business templates"></a>

				<a href="themes/css/#" name="pattern16"><img src="themes/switch/images/pattern/pattern16.png" alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="pattern17"><img src="themes/switch/images/pattern/pattern17.png" alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="pattern18"><img src="themes/switch/images/pattern/pattern18.png" alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="pattern19"><img src="themes/switch/images/pattern/pattern19.png" alt="bootstrap business templates"></a>
				<a href="themes/css/#" name="pattern20"><img src="themes/switch/images/pattern/pattern20.png" alt="bootstrap business templates"></a>

			</div>
		</div>
	</div>
	<span id="themesBtn"></span>
</body>

</html>