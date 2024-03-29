
<!DOCTYPE html>

	<html class="no-js"> 
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Go-Flight</title>
	<link rel="icon" href="<?php echo base_url() ?>_assets/images/globe.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="JONFLIGHT" />
	<meta name="keywords" content="JONFLIGHT" />
	<meta name="author" content="JONFLIGHT" />
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	<script src="http://maps.googleapis.com/maps/api/js"></script>
	<script>
		function validateForm() {
  	var x = document.forms["myForm"]["fname"].value;
  		if (x == "") {
    	alert("Name must be filled out");
   	 	return false;
  		}
		}
	</script>

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/superfish.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/magnific-popup.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/cs-select.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/cs-skin-border.css">
	
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/seat.css">


	<!-- Modernizr JS -->
	<script src="<?php echo base_url() ?>_assets/js/modernizr-2.6.2.min.js"></script>

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page" style="background-image:url(<?php echo base_url() ?>_assets/images/vel.jpg)">

		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<div class="tulisan wow fadeIn" data-wow-duration="3s" data-wow-delay="0s" >
					<h1 id="fh5co-logo" style="padding-left: 0px;"><a href="<?php echo base_url() ?>"> <img src="<?php echo base_url() ?>_assets/images/globe.png" style= "max-width: 40px; max-height: 40px; padding-right: 5px;"></i>Go-Flight</a></h1>
					<div>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active"><a href="<?php echo base_url() ?>">Home</a></li>

							<?php if ( $this->session->userdata('user') ): ?>
							<li class=""><a href="<?php echo base_url() ?>reservation">My Reservations</a></li>
							<li class="header-username"><a><?php echo $this->session->userdata('user')['fullname'] ?></a></li>
							<li class=""><a href="<?php echo base_url() ?>account/logout">Logout</a></li>
							
							<?php else: ?>
							<li><a href="<?php echo base_url() ?>account/signin">Signin</a></li>
							<li><a href="<?php echo base_url() ?>account/signup">Signup</a></li>
							<?php endif; ?>

						</ul>
					</nav>
				</div>
			</div>
		</header>
		<script>
              new WOW().init();

			  wow = new WOW(
                      {
                      boxClass:     'wow',      // default
                      animateClass: 'animated', // default
                      offset:       0,          // default
                      mobile:       true,       // default
                      live:         true        // default
                    }
                    )
                wow.init();
		</script>

		<!-- end:header-top -->