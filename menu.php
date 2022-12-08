<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Radhe Boutique</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/rb.jpg"  />
    <link rel="apple-touch-icon" href="images/rb.jpg">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Colors CSS -->
    <link rel="stylesheet" href="css/colors.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="barber_version">

    <!-- LOADER -->
    <div id="preloader">
        <div class="cube-wrapper">
		  <div class="cube-folding">
			<span class="leaf1"></span>
			<span class="leaf2"></span>
			<span class="leaf3"></span>
			<span class="leaf4"></span>
		  </div>
		  <span class="loading" data-name="Loading">Radhe Boutique</span>
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->

    <div id="wrapper">

        <!-- Sidebar-wrapper -->
        <div id="sidebar-wrapper">
			<div class="side-top">
				<div class="logo-sidebar">
					<a href="index.php"><img style="height:100px; width:150px; border-radius:80%;" src="images/rb.jpg" alt="image"></a>
				</div>
				<ul class="sidebar-nav">
					<li><a href="index.php">Home</a></li>
					<li><a href="category.php">Category</a></li>
					<li><a href="products.php">Product</a></li>
					<?php
						error_reporting(0);
						session_start();
						IF($_SESSION['user_id']!="")
						{
							?>
					<li><a href="logout.php">Logout</a></li>
					<li><a href="cart.php">Cart</a></li>
					<?php
						}
						else
						{
					?>
					<li><a href="login.php">Login</a></li>
					<li><a href="reg.php">Register</a></li>
					<?php
						}
					?>
					<li><a href="contact.php">Contact Us</a></li>
				</ul>
			</div>
        </div>
        <!-- End Sidebar-wrapper -->