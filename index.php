<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home:Acutis</title>

<?php include("head.php"); ?>	
<script type="text/javascript" src="js/custom.js" ></script>
	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
	<!-- html5.js for IE less than 9 -->
	<!-- css3-mediaqueries.js for IE less than 9 -->
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!--[if lt IE 9]>
 	<link rel="stylesheet" type="text/css" href="css/ie8-and-down.css" />
	<![endif]-->
</head>
<body>
<?php include("header.php"); ?>
<?php include("social-links.php"); ?>
<div class="container" id="top">
	 <!-- Slider -->
	<div class="slider" class="adjust">
		<div class="flexslider">
		  <ul class="slides">
		    <li>
		      <img src="images/slider-img.jpg" />
		    </li>
			<li>
			  <img src="images/slider-img.jpg" />
			</li>
		  </ul>
		</div>
	

	<!-- Book Apointment -->
	<div class="book-form">
		<div class="inner-form">

		<h4><img src="images/calendar.png" alt="">Order supplies</h4>
		<form id="contact-form2" action="#">
			<div class="inputs">
				<input name="name" id="name" type="text" data-value="Full Name" class="border-small">
				<input name="mail" id="mail" type="text" data-value="E-Mail Address">
				<input name="phone" id="phone" type="text" data-value="Phone Number">
	       		<input name="date" id="date" type="text" data-value="DD/MM/YYYY 00:00">
	        </div>

			<input id="submit_contact2" type="submit" value="ORDER">
			<div id="msg2" class="message"></div>
		</form>
		
		</div>
	</div>
	<!-- End Book Apointment -->
	</div>
	<!-- End SLider -->



	<!-- Container -->
	<div class="wrapper">
				
		<!-- Recent Works -->
		<div class="features dark">
			<div class="features-items column3">
				<a href="#">
					<div class="service-item">
						<a href="#" class="service-img"><img src="images/one.png" alt=""></a>
					</div>
					<h4>Triple Check</h4>
					<div class="line"></div>
					<p>Acutis will bill your insurance<br> company directly for <br>testing and lab services</p>
				</a>
			</div>
			<div class="features-items column3">
				<a href="#">
					<div class="service-item">
						<a href="#" class="service-img"><img src="images/two.png" alt=""></a>
					</div>
					<h4>Quick Turnaround</h4>
					<div class="line"></div>
					<p>Acutis will bill your insurance<br> company directly for <br>testing and lab services</p>
				</a>
			</div>
			<div class="features-items column3">
				<a href="#">
					<div class="service-item">
						<a href="#" class="service-img"><img src="images/three.png" alt=""></a>
					</div>
					<h4>Access to Express</h4>
					<div class="line"></div>
					<p>Acutis will bill your insurance<br> company directly for <br>testing and lab services</p>
				</a>
			</div>
			<div class="features-items column3">
				<a href="#">
					<div class="service-item">
						<a href="#" class="service-img"><img src="images/four.png" alt=""></a>
					</div>
					<h4>Simplified Reports</h4>
					<div class="line"></div>
				<p>Acutis will bill your insurance<br> company directly for <br>testing and lab services</p>
				</a>
			</div>
			<div class="clear"></div>
		</div>
		<!-- End Recent Works -->
		<div class="defination-content">
			<p class="font-large"><span class="text-bold">A New Definition</span> of Service.</p>
			<p class="text-indent-15">We have built a company with a commitment to the best science, technology and practices, all set in motion by deeply committed professionals.</p>
			<p class="text-indent-15"><b>Acutis</b> is a company with no gaps.No Bureacracy.No Evasive hierarchy.From our CEO engaged in strategic planning and our Senior Scientists in the lab, to Sales Specialists on road, every employee is fully Accountable. Fully Accessible. Completely willing to assume responsibility. <b>So you have one less thing to worry about.</b></p>
		</div>

		<div class="tested-content">
			<p class="font-large text-center">Why am i Being <span class="text-bold">Tested?</span></p>
			<center><img src="images/dotline.png" /></center>
			<p class="text-indent-15 text-center text-black text-normal">Please do not contact your physician's office with questions about an invoice from Acutis.</br>contact Acutis to discuss payment and our fanancial harship program</p>
		</div>
		
		<div style="text-align: center" class="contact5 colunm">
		<p><strong>1-347-662-2450</strong></p>
		<img src="images/bottom.png" > </img>
		</div>
		<p style="color:#005f60;font-size:23px;text-align:center;"><span><strong>Available Monday-Friday 9am to 5pm</strong></span></p>
	</div>
	<!-- End Wrapper -->

     <?php include 'footer.php'; ?>

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" charset="utf-8">
  		$(window).load(function() {
  		  $('.flexslider').flexslider();
  		});
	</script>
	<script type="text/javascript" src="js/jquery.superfish.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/zebra_datepicker.js"></script>
    <script type="text/javascript" src="js/core.js"></script>
</div>
</body>
</html>