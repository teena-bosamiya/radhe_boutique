<?php
include('menu.php');
include("db/db.php");
$obj=new query();
if(isset($_REQUEST['x']))
{
	$i=$_REQUEST['x'];
	$condition_arr=array('pro_id'=>$_REQUEST['x']);
	$data=$obj->getData('tbl_product',$condition_arr);
	foreach($data as $res)
	{
			$name=$res['pro_name'];
			$price=$res['pro_price'];
			$dec=$res['pro_details'];
			$material=$res['pro_material'];
			$pic=$res['pro_img'];
	}
}
else
{
	?>
	<script type="text/javascript">
                window.location.href="product.php";
                </script>
							<?php
}
?>
<div id="page-content-wrapper">
            <a href="#menu-toggle" class="menuopener" id="menu-toggle"><i class="fa fa-bars"></i></a>
			
            <div class="all-page-bar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="title title-1 text-center">
								<div class="title--heading">
									<h1>Our Products</h1>
								</div>
								<div class="clearfix"></div>
								<ol class="breadcrumb">
									<li><a href="index.php">Home</a></li>
									<li class="active">Our Products Details</li>
								</ol>
								
							</div>
							<!-- .title end -->
						</div>
					</div>
				</div>
			</div><!-- end all-page-bar -->

            <div id="barbers" class="section lb">
                <div class="container-fluid">
                    <div class="section-title row text-center">
                        <div class="col-md-8 col-md-offset-2">
                        <small>Radhe Boutique</small>
                        <h3>WELCOME TO THE OUR<br> Wedding Dress Products Details.</h3>
                        <hr class="grd1">
                        
                        </div>
                    </div><!-- end title -->
 <div class="row">
						<div class="col-md-6">
							<div class="appointment-left">
								<h2><?php echo $name; ?></h2><hr>
								<div class="appointment-time">
								<h3>Description : <?php echo $dec;?></h3><hr>
								<h3>Material : <?php echo $material; ?></h3><hr>
								<h3>Price : Rs. <?php echo $price; ?></h3><hr>
								<form method='post' action="cart.php?action=add&id=<?php echo $i; ?>" >
								<ol class="breadcrumb">
									<li><input  class="form-control" type='text' name='quantity' value='1' size='2' /></li>
									<li><input class="btn btn-light btn-radius btn-brd grd1 effect-1 butn" type='submit' value='Add to Your Favourites' id='gobutton' /></li>
								</form><hr>
								</div>
							</div>
						</div>
                        <div class="col-md-6">
                            <div class="contact_form">
                                <div id="message"></div>
                               <img style="width:100%; height:100%;"  src="admin/<?php echo $pic?>" alt="Radhe">
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                   
                </div><!-- end container -->
            </div><!-- end section -->

<?php
include('footer.php');
?>