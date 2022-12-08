<?php
include('menu.php');
include("db/db.php");
$obj=new query();

error_reporting(0);
if(isset($_REQUEST['x']))
{
	$condition_arr=array('cat_id'=>$_REQUEST['x']);
	$data=$obj->getData('tbl_product',$condition_arr);
}else
{
$data=$obj->getData('tbl_product','');
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
									<li class="active">Our Products</li>
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
                        <h3>WELCOME TO THE OUR<br> Wedding Dress Products.</h3>
                        <hr class="grd1">
                        
                        </div>
                    </div><!-- end title -->

                    <div class="row dev-list text-center">
<?php 
							
							foreach($data as $res)
							{
						?>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow " data-wow-duration="1s" data-wow-delay="0.6s">
                            <div class="widget clearfix">
								<div class="hover-br">
									<img src="admin/<?php echo $res['pro_img'];?>" style="height:400px;" alt="" class="img-responsive">
									<div class="social-up-hover">
										<div class="footer-social">
											<a href="product_details.php?x=<?php echo $res['pro_id']; ?>" class="btn grd1"><i>More Details</i></a>
										</div>
									</div>
								</div>
                                <div class="widget-title">
                                    <h3>Price : <?php echo $res['pro_price']; ?></h3>
                                    <small><?php echo $res['pro_name']; ?></small>
                                </div>
                                <!-- end title -->
                               
                            </div><!--widget -->
                        </div>
						<?php
							}
							?><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end section -->

<?php
include("footer.php");
?>