<?php
include("menu.php");
include("db/db.php");
$obj=new query();
error_reporting(0);
$data=$obj->getData('tbl_category','');
?>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <a href="#menu-toggle" class="menuopener" id="menu-toggle"><i class="fa fa-bars"></i></a>
			
            <div class="all-page-bar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="title title-1 text-center">
								<div class="title--heading">
									<h1>Our Category</h1>
								</div>
								<div class="clearfix"></div>
								<ol class="breadcrumb">
									<li><a href="index.php">Home</a></li>
									<li class="active">Our Category</li>
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
                        <h3>WELCOME TO THE OUR<br> Wedding Dress Category.</h3>
                        <hr class="grd1">
                        
                        </div>
                    </div><!-- end title -->

                    <div class="row">
                        
						<?php 
							
							foreach($data as $res)
							{
						?><div class="col-md-3">
                            <div class="service-wrap clearfix">
                                <img style="height:200px;width:100%;" src="admin/<?php echo $res['cat_img'];?>" alt="" class="img-responsive img-rounded ">
                                <h3><a href="products.php?x=<?php echo $res['cat_id']; ?>" >More Product of : <?php echo $res['cat_name']?></a></h3>
                            </div><!-- end issue -->
							</div>
<?php
							}
							?>
                        <!-- end col -->
                    </div>
                    <hr class="invis4">

                    <div class="text-center">
                        <a href="products.php" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">View All Products Of RB.</a>
                    </div>
                </div><!-- end container -->
            </div><!-- end section -->

        <?php
		include("footer.php");
		?>