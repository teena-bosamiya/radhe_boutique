<?php
include("../db/db.php");
include("menu.php");
error_reporting(0);
$obj=new query();
$data=$obj->getData('tbl_product','');
?>
		<div class="main-grid">
			<div class="agile-grids">	
				<!-- tables -->
				
				<div class="table-heading">
					<h2>Product</h2>
				</div>
				<div class="agile-tables">
					<div class="w3l-table-info">
					 
					    <table id="table">
						<thead>
						  <tr>
							<th>No.</th>
							<th>Name</th>
							<th>Pic</th>
							<th>Price</th>
							<th>Material</th>
							<th>Details</th>
							<th>Edit</th>
							<th>Delete</th>
						  </tr>
						</thead>
						<tbody>
						  <?php 
							$i=1;
							foreach($data as $res)
							{
						?>
						  <tr>
							<td><?php echo $i;?></td>
							<td><?php echo $res['pro_name']; ?></td>
							<td><img class="catimg" src="<?php echo $res['pro_img']; ?>" /></td>
							<td><?php echo $res['pro_price']; ?></td>
							<td><?php echo $res['pro_material']; ?></td>
							<td><?php echo $res['pro_details']; ?></td>
							
							<td><?php 
								echo "<a href='product.php?x=$res[pro_id]'><img src='images/edit.png' style='height:20px;width:20px;'></a>"; ?></td>
							<td><?php 
								echo "<a href='view_product.php?x=$res[pro_id]'><img src='images/delete.png' style='height:20px;width:20px;'></a>";
								if(isset($_REQUEST['x']))
{
	$condition_arr=array('pro_id'=>$_REQUEST['x']);
	$obj->deleteData('tbl_product',$condition_arr);
	?>
	<script type="text/javascript">
                window.location.href="view_product.php";
                </script>
							<?php
}
								?>
								</td>
						  </tr>
						<?php
						$i++;
							}
						?>
						</tbody>
					  </table>
					</div>
				  
				</div>
				<!-- //tables -->
			</div>
		</div>
		<?php
			include("footer.php");
		?>