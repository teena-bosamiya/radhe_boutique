<?php
include("../db/db.php");
$obj=new query();
$i="";
include("menu.php");
$cat_name="";
$cat_img="";
if(isset($_REQUEST['x']))
{
	$i=$_REQUEST['x'];
	$condition_arr=array('cat_id'=>$_REQUEST['x']);
	$data=$obj->getData('tbl_category',$condition_arr);
	foreach($data as $res)
	{
		$cat_name=$res['cat_name'];
		$cat_img=$res['cat_img'];
	}
}
?>

<div class="panel panel-widget forms-panel">
						<div class="progressbar-heading general-heading">
							<h4>Add New Category</h4>
						</div>
						<div class="forms">
								<h3 class="title1"></h3>
								<div class="form-three widget-shadow">
									<form class="form-horizontal"  method="post" name="frm_add_cat" enctype="multipart/form-data" >
										<div class="form-group">
											<label for="focusedinput" class="col-sm-2 control-label">Category Name</label>
											<div class="col-sm-8">
												<input type="text"value="<?php echo $cat_name; ?>" class="form-control1" name="cat_name" id="focusedinput" placeholder="Category Name">
											</div>
											
										</div>
								
										<div class="form-group">
											<label for="smallinput" class="col-sm-2 control-label label-input-sm">Slect Image</label>
											<?php
if(isset($_REQUEST['x']))											   
{
	?>
	<div class="col-sm-8">
	<img value="<?php echo $cat_img; ?>" src="<?php echo $cat_img; ?>" ></img>

												<input type="file" class="form-control1 input-sm" id="smallinput" name="cat_img">
											</div>
											<?php
}
else{
?>


											<div class="col-sm-8">
												<input type="file" class="form-control1 input-sm" id="smallinput" name="cat_img">
											</div>
											<?php
}
?>
										</div>
												<div class="bg-effect">
													<ul class="bt-list">
														<li><input type="submit" name="btn_cat"  class="btn btn-primary" value="Save"></li>
													</ul>
												</div>
										</div>
									</form>
								</div>
						</div>
					</div>
<?php
if(isset($_REQUEST["btn_cat"]))
{
	$name=$_REQUEST['cat_name'];
	$file=$_FILES['cat_img']['name'];
	$dest="images/category/$file";
	$src=$_FILES['cat_img']['tmp_name'];
	move_uploaded_file($src,$dest);
	
	if($i!="")
	{
		if(!preg_match("/^[a-zA-Z ]*$/",$name))
		{
			echo "<script> alert('only letters & space allowed')</script>";
			
		}
		else
		{
			if($file!="")
			{
				$condition_arr=array('cat_name'=>$name,'cat_img'=>$dest);
				$result=$obj->updateData('tbl_category',$condition_arr,'cat_id',$_REQUEST['x']);
			}
			else
			{
			$condition_arr=array('cat_name'=>$name);
			$result=$obj->updateData('tbl_category',$condition_arr,'cat_id',$_REQUEST['x']);
			}
			?>
			<script type="text/javascript">
                window.location.href="view_category.php";
                </script>
			<?php
		}
	}
	else {
	if(!preg_match("/^[a-zA-Z ]*$/",$name))
		{
			echo "<script> alert('only letters & space allowed')</script>";
			
		}
		elseif($file=="")
		{
			echo "<script> alert('Field is required')</script>";
		}
		else
		{
	$condition_arr=array('cat_name'=>$name,'cat_img'=>$dest,'cat_status'=>1);
	$result=$obj->insertData('tbl_category',$condition_arr);
	?>
			<script type="text/javascript">
                window.location.href="view_category.php";
                </script>
			<?php
		}
	}
}
include("footer.php");
?>