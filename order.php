<?php
include("db/db.php");
$obj=new query();
include("menu.php");
?>
<div id="page-content-wrapper">
            <a href="#menu-toggle" class="menuopener" id="menu-toggle"><i class="fa fa-bars"></i></a>
			
            <div class="all-page-bar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="title title-1 text-center">
								<div class="title--heading">
									<h1>RB</h1>
								</div>
								<div class="clearfix"></div>
								<ol class="breadcrumb">
									<li><a href="index.php">Home</a></li>
									<li class="active">RB</li>
								</ol>
								
							</div>
							<!-- .title end -->
						</div>
					</div>
				</div>
			</div><!-- end all-page-bar -->

            <div id="services" class="section lb">
                <div class="container-fluid">
                    <div class="section-title row text-center">
                        <div class="col-md-8 col-md-offset-2">
                        <small>Radhe Boutique</small>
                        <h3>Tanks for purchasing product from<br>Radhe Boutique</h3>
                        <hr class="grd1">
                        
                        </div>
                    </div><!-- end title -->

                    <hr class="invis4">

                    <div class="text-center">
                        <a href="products.php" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">View All Products Of RB.</a>
                    </div>
                </div><!-- end container -->
            </div><!-- end section -->
	<?php
	if(isset($_REQUEST['t']))
	{
	$nm="";
	session_start();
	error_reporting(0);
	if($_SESSION['user_id']=="")
	{
		
		?>
	<script type="text/javascript">
                window.location.href="login.php";
                </script>
							<?php
	
	}
	else
	{
	foreach($_SESSION['cart_item'] as $p)
	{
	 
	 $gg[0]=$p['pro_name'];
	 $gg[1]=$p['quantity'];
	 $o=implode("-",$gg);

	$nm=$nm." , ".$o;
		
	}
	$condition_arr=array('user_id'=>$_SESSION['user_id'],'pro_name'=>$nm,'total'=>$_REQUEST['t']);
	$result=$obj->insertData('tbl_order',$condition_arr);
	unset($_SESSION["cart_item"]);
	}
	}
	include("footer.php");
	?>