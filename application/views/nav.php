<!DOCTYPE html>
<html>
<head>
	<title>nav</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="home.ico"/>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/navstyle.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/footer.css">

</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">

					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
				<a class="navbar-brand" href="#">Logo</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">

					<li><a href="<?php echo base_url() ?>/index.php/Trial/index">HOME</a></li>
					
					<li><a href="#">My_Name</a></li>
					<li><a href="logout.php">LOG OUT</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="subfilter" style="padding-top: 100px;">
		<div id="filterup"></div>

		<div id="filter">
			<form action="<?php echo base_url() ?>/index.php/auth/nav" method="POST">
				<div class="container-fluid1 dropdown btn1">


					<select name="Gender" class="btn  btn-responsive xyz" style=""><!-- xyz for  styling -->
						<option value="Any">Gender : Any</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</div>
				<div class="container-fluid1 btn2">

					<select name="Distance" class="btn  btn-responsive xyz"  ><!-- xyz for  styling -->
						<option value="0">Distance:All</option>

						<option value="3">1-3 km</option>
						<option value="5">3-5 km</option>
						<option value="7">5-7 km</option>
					</select>
				</div>
				<div class="container-fluid1 btn3">


					<select name="Budget" class="btn  btn-responsive xyz" ><!-- xyz for  styling -->
						<option value="0<">Budget : All</option>
						<option value="4<">4000<</option>
						<option value="4+">4000+</option>
						<option value="5+">5000+</option>
					</select>
				</div>
				<div class="container-fluid1 btn4">

					<input type="submit" name="SUBMIT" class=" btn" id="submitbutton2" >
				</div>
			</form>
		</div>

		<div id="filterdown"></div>
	</div>

	
	
	<div id="results">
		<div class="containerup" >

		</div>

		<div class="container" id="container1" >
			<div id="firstbox">
			<div id="address">Address:'</div>
			<div id="goto"><a href="#">Goto</a></div>
			</div>
			<div class="container" id="container2">

				<div class="boygirl">this is for</div>
				<div class="rent">Rent:</div>
			</div>
			<div class="container" id="container3">
				<div class="seats" >seats</div>
				<div class="Details">Details</div>
			</div>
		</div>
		<div class="containerdown" >

		</div>
	</div>
	
	</div>
	<div id="results">
		<div class="containerup" >

		</div>

		<div class="container" id="container1" >
			<div id="firstbox">
			<div id="address">Address:'</div>
			<div id="goto"><a href="<?php echo base_url() ?>/index.php/auth/property_detail">Goto</a></div>
			</div>
			<div class="container" id="container2">

				<div class="boygirl">this is for</div>
				<div class="rent">Rent:</div>
			</div>
			<div class="container" id="container3">
				<div class="seats" >seats</div>
				<div class="Details">Details</div>
			</div>
		</div>
		<div class="containerdown" >

		</div>
	</div>
	
	</div>
	<!-- footer start -->
		<footer class="footer-distributed">

			<div class="footer-right">

				<a href="https://www.facebook.com/tuskibansal"><i class="fa fa-facebook"></i></a>
				<a href="https://twitter.com/login"><i class="fa fa-twitter"></i></a>
				<a href="https://www.linkedin.com/mynetwork/"><i class="fa fa-linkedin"></i></a>
				<a href="https://github.com/anonymous043044/startup-bvp1.1"><i class="fa fa-github"></i></a>

			</div>

			<div class="footer-left">

				<p class="footer-links">
					<a href="<?php echo base_url() ?>/index.php/Trial/index">Home</a>
					·
					<a href="#about">About</a>
					·
					<a href="#contact">Contact</a>
					·
					<a href="signup/signin.php">Log Out</a>
					
					
				</p>

				<p>Company Name &copy; 2017</p>
			</div>

		</footer>
		<!-- footer end  here -->
</body>
</html>