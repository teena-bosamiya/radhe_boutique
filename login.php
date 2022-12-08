<?php
require('db/db.php');
$obj=new query();
include("menu.php");
?>
<script>  
function validateform(){  
var password=document.myform.psw.value;  
  
var x=document.myform.email.value;  
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
  return false;  
  }  else if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
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
									<h1>Login</h1>
								</div>
								<div class="clearfix"></div>
								<ol class="breadcrumb">
									<li><a href="index.php">Home</a></li>
									<li class="active">Login</li>
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
                        <small>We Are Welcoming again you.</small>
                        <h3>Login</h3>
                        <hr class="grd1">
                        </div>
                    </div><!-- end title -->

                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="contact_form">
                                <div id="message"></div>
                                <form  class="row" name="myform" onsubmit="return validateform()"   method="post">
                                    <fieldset class="row-fluid">
                                        
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <input type="password" name="psw" id="first_name" class="form-control" placeholder="Your Password">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                            <button type="submit"  name="btn" value="Login" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block subt">Login</button>
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
error_reporting(0);
if(isset($_POST['btn']))
{
	$name=$_POST['email'];
	$password=$_POST['psw'];
	$data=$obj->getData('tbl_user_details');
	foreach($data as $res)
	{
		if($name==$res['user_email'] && $password==$res['user_psw'])
		{
			$_SESSION['user_id']=$res['user_id'];
 
?>
<script type="text/javascript">
window.location.href="products.php";
</script>
<?php
		}
		else
		{
			echo "<script>alert('invalid User Name And Password');
			window.location.href='login.php';
			</script>";
		}
	}
}
include("footer.php");
?>