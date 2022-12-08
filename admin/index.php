<!DOCTYPE html>
<html lang="en">
<head>
<title>Awesome Login Form Responsive Widget Template :: w3layouts</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Awesome Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/login/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/login/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Philosopher:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,vietnamese" rel="stylesheet">
<!-- //web-fonts -->
</head>
<body>
<div data-vide-bg="video/social2">
	<div class="center-container">
		<!--header-->
		<div class="header-w3l">
			<h1>RADHE BOUTIQUE ADMIN PANEL</h1>
		</div>
		<!--//header-->
		<!--main-->
		<div class="main-content-agile">
			<div class="wthree-pro">
				<h2>Admin Login</h2>
			</div>
			<div class="sub-main-w3">	
				<form name="frm_admin" method="post">
					<input placeholder="E-mail" name="ad_email" type="email" required="">
					<span class="icon1" style="margin-top:10px;"><i class="fa fa-user" aria-hidden="true"></i></span>
					<input  placeholder="Password" name="ad_password" type="password" required="">
					<span class="icon2" style="margin-top:20px;"><i class="fa fa-unlock" aria-hidden="true"></i></span>
					<div class="rem-w3">
						<span class="check-w3" ></span>
						
						<div class="clear"></div>
					</div>
					<input type="submit" value="Login" name="btn_admin">
				</form>
				<?php
session_start();
include("../db/db.php");
//error_reporting(0);
if(isset($_POST['btn_admin']))
{
		$name=$_POST['ad_email'];
	$password=$_POST['ad_password'];
	$obj=new query();
$data=$obj->getData('tbl_admin','');
foreach($data as $res)
							{
 if($name==$res['admin_email'] && $password==$res['admin_psw'])
 {
 
 $_SESSION['admin_id']=$res['admin_id'];
 
 ?>
 <script type="text/javascript">
 window.location.href="category.php";
 </script>
<?php
 }
}
}
?>
			</div>
		</div>
		<!--//main-->
		<!--footer-->
		<div class="footer">
			<p>Developed by : Veenchhee Teena</p>
		</div>
		<!--//footer-->
	</div>
</div>
<?php

?>
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/jquery.vide.min.js"></script>
<!-- //js -->
</body>
</html>