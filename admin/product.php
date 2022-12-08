<?php
include("../db/db.php");
$obj=new query();
error_reporting(0);
include("menu.php");
$name="";
$img="";
$price="";
$material="";
$details="";
if(isset($_REQUEST['x']))
{
	$i=$_REQUEST['x'];
	$condition_arr=array('pro_id'=>$_REQUEST['x']);
	$data=$obj->getData('tbl_product',$condition_arr);
	foreach($data as $res)
	{
			$name=$res['pro_name'];
			$img=$res['pro_img'];
			$price=$res['pro_price'];
			$material=$res['pro_material'];
			$details=$res['pro_details'];
			$cat=$res['cat_id'];
	}
}
?>
<div class="panel panel-widget forms-panel">
						<div class="progressbar-heading general-heading">
							<h4>Product</h4>
						</div>
						<div class="forms">
								<h3 class="title1"></h3>
								<div class="form-three widget-shadow">
									<form class="form-horizontal"  method="post" enctype="multipart/form-data">
										<div class="form-group">
											<label for="focusedinput"  class="col-sm-2 control-label">Product Name</label>
											<div class="col-sm-8">
												<input type="text" value="<?php echo $name; ?>" class="form-control1" name="pro_name" id="focusedinput" placeholder="Product Name">
											</div>
										</div>
								<?php
if(isset($_REQUEST['x']))											   
{
	?>
	<div class="form-group">
											<label for="smallinput"  class="col-sm-2 control-label label-input-sm">Select Image</label>
											<div class="col-sm-8">
												<img value="<?php echo $img; ?>" style="height:200px; width150px;" src="<?php echo $img; ?>" ></img>
	<input type="file" name="pro_img" class="form-control1 input-sm" id="smallinput">
											</div>
										</div>
	
											<?php
}
else{
?>
										<div class="form-group">
											<label for="smallinput"  class="col-sm-2 control-label label-input-sm">Select Image</label>
											<div class="col-sm-8">
												<input type="file" name="pro_img" class="form-control1 input-sm" id="smallinput">
											</div>
										</div>
										<?php
}
										?>
										<div class="form-group">
											<label for="selector1" class="col-sm-2 control-label">Select Category</label>
											<div class="col-sm-8"><select name="cat_id" id="selector1" class="form-control1">
												<?php
						  if($cat=="")
						  {
						  $data1=$obj->getData('tbl_category','');
						  }
						  else{
							  $condition_arr=array('cat_id'=>$cat);
							$data1=$obj->getData('tbl_category',$condition_arr);  
						  }
						  foreach($data1 as $res1)
							{
						  ?>
							<option  value="<?php echo $res1['cat_id']; ?>"><?php echo $res1['cat_name']; ?></option>
							<?php
							}
						  ?>
											</select></div>
										</div>
										
										<div class="form-group">
											<label for="focusedinput" class="col-sm-2 control-label">Material</label>
											<div class="col-sm-8">
												<input type="text" value="<?php echo $material; ?>" name="pro_material" class="form-control1" name="Default Input" id="focusedinput" placeholder="Material">
											</div>
										</div>
										<div class="form-group">
											<label for="focusedinput" class="col-sm-2 control-label">Rate</label>
											<div class="col-sm-8">
												<input type="text" value="<?php echo $price; ?>" name="pro_price" class="form-control1" name="Default Input" id="focusedinput" placeholder="Rate">
											</div>
										</div>
										<div class="form-group">
											<label for="txtarea1" class="col-sm-2 control-label">Other Details</label>
											<div class="col-sm-8"><textarea  name="pro_dec" placeholder="Enter Other Details" id="txtarea1" cols="50" rows="4" class="form-control1"><?php echo $details; ?></textarea>
											</div>
										</div>
										<div >
												<ul class="bt-list">
													<li><input type="submit" class="btn btn-primary" name="btn_pro" value="Save"></li>
												</ul>
										</div>
									</form>
								</div>
						</div>
					</div>
<?php
if(isset($_REQUEST["btn_pro"]))
{
	$name=$_REQUEST['pro_name'];
	$file=$_FILES['pro_img']['name'];
	$dest="images/product/$file";
	$src=$_FILES['pro_img']['tmp_name'];
	
	$cat=$_REQUEST['cat_id'];
	$price=$_REQUEST['pro_price'];
	$details=$_REQUEST['pro_dec'];
	$material=$_REQUEST['pro_material'];
	if(!preg_match("/^[a-zA-Z ]*$/",$name))
		{
			echo "<script> alert('only letters & space allowed')</script>";
			
		}
		elseif($name=="")
		{
			echo "<script> alert('add name of product')</script>";
		}
		
		elseif(!preg_match("/^[0-9]*$/",$price))
		{
			echo "<script> alert('only letters & space allowed')</script>";
		}
		elseif($details=="")
		{
			echo "<script> alert('add Descripton')</script>";
		}
		elseif($material=="")
		{
			echo "<script> alert('add Material')</script>";
		}
		
		else
		{
	move_uploaded_file($src,$dest);
	if($i!="")
	{
		if($file=="")
		{
			$condition_arr=array('pro_name'=>$name,'pro_price'=>$price,'pro_material'=>$material,'pro_details'=>$details,'pro_status'=>1);
			$obj->updateData('tbl_product',$condition_arr,'pro_id',$i);
		}
		else
		{
				$condition_arr=array('pro_name'=>$name,'pro_price'=>$price,'pro_material'=>$material,'pro_details'=>$details,'pro_img'=>$dest,'pro_status'=>1);
				$obj->updateData('tbl_product',$condition_arr,'pro_id',$i);
		}
		?>
	<script type="text/javascript">
                window.location.href="view_product.php";
                </script>
        <?php
	}
	else
	{
		if($file=="")
		{
			echo "<script> alert('add picture of product')</script>";
		}
		else{
		$condition_arr=array('cat_id'=>$cat,'pro_name'=>$name,'pro_img'=>$dest,'pro_price'=>$price,'pro_material'=>$material,'pro_details'=>$details,'pro_status'=>1);
		$result=$obj->insertData('tbl_product',$condition_arr);		
		?>
	<script type="text/javascript">
                window.location.href="view_product.php";
                </script>
        <?php
		}
	}
}
}
include("footer.php");
?>