<?php
require('db/db.php');
$obj=new query();
include("menu.php");
?>
<script>  
function validateform()
{
	var name=document.myform.name.value;
	
	var x=document.myform.email.value;  
	var atposition=x.indexOf("@");  
	var dotposition=x.lastIndexOf(".");  
	
	var num=document.myform.ph.value; 

	var city=document.myform.city.value;

	var state=document.myform.state.value;
	
	var pin=document.myform.pin.value;
	
	var password=document.myform.psw.value;
	
	var address=document.myform.address.value;

	if (name==null || name=="")
	{  
		alert("Name can't be blank");  
		return false;  
	}
	else if( (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length)
	{  
		alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
		return false;  
	}  
}  
</script>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <a href="#menu-toggle" class="menuopener" id="menu-toggle"><i class="fa fa-bars"></i></a>
			
            <div class="all-page-bar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="title title-1 text-center">
								<div class="title--heading">
									<h1>Sign UP</h1>
								</div>
								<div class="clearfix"></div>
								<ol class="breadcrumb">
									<li><a href="index.php">Home</a></li>
									<li class="active">Registeration</li>
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
                        <h3>Sign-up</h3>
                        <hr class="grd1">
                        </div>
                    </div><!-- end title -->

                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="contact_form">
                                <div id="message"></div>
                                <form  class="row" name="myform" onsubmit="return validateform();" method="post" enctype="multipart/form-data">
                                    <fieldset class="row-fluid">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="name" id="first_name" class="form-control" placeholder="Your Name">
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                                        </div>
                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="ph" id="email" class="form-control" placeholder="Your Number">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="city" id="first_name" class="form-control" placeholder="City">
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="state" id="first_name" class="form-control" placeholder="State">
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="pin" id="email" class="form-control" placeholder="Pin-Code">
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <input type="password" name="psw" id="first_name" class="form-control" placeholder="********">
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <input type="file" name="pic" id="email" class="form-control" placeholder="Your Picture">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <textarea class="form-control" name="address" id="comments" rows="6" placeholder="Give us Your Address.."></textarea>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                            <button type="submit" name="btn_reg" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block subt">Submit</button>
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
if(isset($_REQUEST["btn_reg"]))
{
	$name=$_REQUEST['name'];
	$number=$_REQUEST['ph'];
	$address=$_REQUEST['address'];
	$email=$_REQUEST['email'];
	$city=$_REQUEST['city'];
	$pin=$_REQUEST['pin'];
	$state=$_REQUEST['state'];
	$psw=$_REQUEST['psw'];
	
	$file=$_FILES['pic']['name'];
	$dest="admin/images/user/$file";
	$src=$_FILES['pic']['tmp_name'];
	move_uploaded_file($src,$dest);
	
	$condition_arr=array('user_name'=>$name,'user_email'=>$email,'user_ph_no'=>$number,'user_address'=>$address,'user_city'=>$city,'user_state'=>$state,'user_pincode'=>$pin,'user_psw'=>$psw,'user_pic'=>$dest,'user_status'=>1);
	$result=$obj->insertData('tbl_user_details',$condition_arr);
}
include("footer.php");
?>