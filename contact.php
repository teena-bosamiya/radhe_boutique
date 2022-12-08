<?php
require('db/db.php');
$obj=new query();
include("menu.php");
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
									<h1>Contact Us</h1>
								</div>
								<div class="clearfix"></div>
								<ol class="breadcrumb">
									<li><a href="index.php">Home</a></li>
									<li class="active">Contact Us</li>
								</ol>
								
							</div>
							<!-- .title end -->
						</div>
					</div>
				</div>
			</div><!-- end all-page-bar -->

            <div id="contact" class="section wb">
                <div class="container-fluid">
                    <div class="section-title row text-center">
                        <div class="col-md-8 col-md-offset-2">
                        <small>LET'S MAKE AN CONTACT FOR YOUR LIFE</small>
                        <h3>Contact Us</h3>
                        <hr class="grd1">
                        </div>
                    </div><!-- end title -->

                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="contact_form">
                                <div id="message"></div>
                                <form  class="row"   method="post">
                                    <fieldset class="row-fluid">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="name" id="first_name" class="form-control" placeholder="First Name">
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                                        </div>
                                        
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <textarea class="form-control" name="msg" id="comments" rows="6" placeholder="Give us more details.."></textarea>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                            <button type="submit" name="btn_con" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block subt">Submit</button>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end section -->

            <div id="map" class="map-box">
                <div class="container-fluid">
                    
                </div><!-- end container -->
            </div><!-- end section -->

<?php
if(isset($_REQUEST["btn_con"]))
{
	$name=$_REQUEST['name'];
	$email=$_REQUEST["email"];
	$msg=$_REQUEST["msg"];
	if(!preg_match("/^[a-zA-Z ]*$/",$name))
		{
			echo "<script> alert('only letters & space allowed')</script>";
			
		}
		else
		{
	$condition_arr=array('con_name'=>$name,'con_email'=>$email,'con_msg'=>$msg,'con_status'=>1);
	$result=$obj->insertData('tbl_contact',$condition_arr);
	echo "<script> alert('Thanks For Contact.')</script>";
		}
}
include("footer.php");
?>