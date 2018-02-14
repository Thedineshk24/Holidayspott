<?php 
	session_start(); 
	
	include('includes/admin_db.php');
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Holiday Spot</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Holiday Spot Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">   
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" property="" />   
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<script src="js/jquery-2.2.3.min.js"></script> 
<!-- //js -->
<!-- web-fonts --> 
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Bad+Script" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Asul" rel="stylesheet">
<!-- //web-fonts --> 
</head>
<body>
	<!-- banner -->
	<div class="banner">  
		<div class="header agileinfo-header"><!-- header -->
			<nav class="navbar navbar-default">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a href="index.php">Holiday<span> Spot</span></a></h1>
					</div> 
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="font-family:Asul; font-size:19px">
						<ul class="nav navbar-nav navbar-left"> 
							<li><a href="index.php" class="w3ls-hover active">Home</a></li>
							<li><a href="about.html" class="btn w3ls-hover">About</a></li>   
							<li><a href="tours.php" class="btn w3ls-hover">Tours</a></li>
							
							<li><a href="contact.html" class="btn w3ls-hover">Contact</a></li>
						</ul>	   
						<div class="social-icon">
							<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
							<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a> 
							<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>  
						</div> 
						<div class="clearfix"> </div>
					</div><!-- //navbar-collapse --> 
				</div><!-- //container-fluid -->
			</nav>
		</div><!-- //header -->	
		<!-- banner-text start -->
		<div class="banner-text"> 
			<div class="container">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="banner-w3lstext">
								<h2>Enjoy The Beauty Of Nature</h2>
								<p>The World Is book And those Who Do Not Travel Read Only One Page &copy; Dinesh</p>
							</div>
						</li>
						<li>
							<div class="banner-w3lstext">
								<h3>Enjoy The Beauty Of Travel In India</h3>
								<p>Kuch Din Toh Gujaro India Main</p>
							</div>
						</li>
						<li>
							<div class="banner-w3lstext">
								<h3>The Beauty Of Travel </h3>
								<p> I Was Born To See The World. That Is what i am going to Do.  </p>
							</div>
						</li>
					</ul> 
				</div> 	 
			</div>
		</div>
		<!-- //banner-text -->    
	</div>
	<!-- //banner --> 
	<!-- welcome -->
	<div class="welcome">
		<div class="container">  
			<!-- CONTAIN AREA STRAT HERE-->
			<h1>content area</h1>
			<div class="col-lg-12 col-md-12">
			<?php 
					include('includes/admin_db.php');
					$query = "select * from posts order by rand() LIMIT 0,20";
					$run = mysqli_query($con,$query);
					
					while($row = mysqli_fetch_assoc($run))
					{
						$post_id = $row['post_id'];
						$title = $row['post_title'];
						$date = $row['post_date'];
						$img = $row['post_img'];
						$p_info = substr($row['post_info'],0,400);
						$near_place = $row['near_place'];
					?>
					<div class="col-lg-12 col-md-12">
						<h2><a href="pages.php?id=<?php echo $post_id;?>"><?php echo $title; ?></a></h2>
						<p>Published On : <?php echo $date; ?></p>
					</div>
					<div class="col-lg-4 col-md-4">
						<img src="uploads\<?php echo $img; ?>" class="img-responsive" style="height:250px;width:300px;">
					</div>
					<div class="col-lg-8 col-md-8">
						<h4 style="color: orange;"><?php echo $p_info.". . ." ;?></h4>
						<p style="text-align:right;font-family:Asul"><a href="pages.php?id=<?php echo $post_id;?>" target="_blank"><b>Read More...</b></a></p>					
					</div>
					<?php 
					} 
					?>

			</div>
			
		</div>
	</div>
	<!-- //welcome -->
	
	<!-- footer start here --> 
	<div class="footer-agile">
		<div class="container">
			<div class="footer-agileinfo"> 
				<div class="col-md-5 col-sm-5 footer-wthree-grid"> 
					<div class="agileits-w3layouts-tweets">  
						<h5><a href="index.html">Holiday Spot</a></h5> 
						<div class="social-icon footerw3ls">
							<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
							<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a> 
							<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>  
						</div>
					</div>
					<p>This blog will provide u a different different types of Hillstations and Travel Places Across India. </p>
				</div> 
				<div class="col-md-3 col-sm-3 footer-wthree-grid">
					<h3>Quick Links</h3>
					<ul>
						<li><a href="index.html"><span class="glyphicon glyphicon-menu-right"></span> Home</a></li>
						<li><a href="about.html"><span class="glyphicon glyphicon-menu-right"></span> About</a></li> 
						<li><a href="tours.html"><span class="glyphicon glyphicon-menu-right"></span> Tours</a></li>
						<li><a href="codes.html"><span class="glyphicon glyphicon-menu-right"></span> Short Codes</a></li>
						<li><a href="contact.html"><span class="glyphicon glyphicon-menu-right"></span> Contact</a></li>
					</ul>
				</div> 	 
				<div class="col-md-4 col-sm-4 footer-wthree-grid">
					<h3>Contact Info</h3>
					<ul>
						<li>Dist : Banaskantha</li> 
						<li>Pin code: 385001</li>
						<li>Phone: +01 111 222 3333</li>
						<li><a href="mailto:info@example.com"> mail@HolidaySpot.com</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>		
			</div>
			<div class="copy-right"> 
				<p>© 2018 Holiday Spot . All rights reserved | Design by > HolidaySpot.</a></p>
			</div>
		</div>
	</div> 
	<!-- //footer end here -->  
	<!-- FlexSlider --> 
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	</script>
	<!-- End-slider-script --> 
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->   
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>