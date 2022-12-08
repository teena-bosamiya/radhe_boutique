<?php
include("../db/db.php");
include("menu.php");
error_reporting(0);
$obj=new query();
$data=$obj->getData('tbl_category','');
?>
		
			<div class="agile-grids">	
				<!-- tables -->
				
				<div class="table-heading">
					<h2>Category</h2>
				</div>
				<div class="agile-tables">
					<div class="w3l-table-info">
					 
					    <table id="table">
						<thead>
						  <tr>
							<th>No.</th>
							<th>Name</th>
							<th>Image</th>
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
							<td><?php echo $i; ?></td>
							<td><?php echo $res['cat_name']; ?></td>
							<td><img class="catimg" src="<?php echo $res['cat_img']; ?>" /></td>
							<td><?php 
								echo "<a href='category.php?x=$res[cat_id]'><img src='images/edit.png' style='height:20px;width:20px;'></a>"; ?></td>
							<td>
							<?php 
								echo "<a href='view_category.php?x=$res[cat_id]'><img src='images/delete.png' style='height:20px;width:20px;'></a>";
								if(isset($_REQUEST['x']))
{
	$condition_arr=array('cat_id'=>$_REQUEST['x']);
	$obj->deleteData('tbl_category',$condition_arr);
	?>
	<script type="text/javascript">
                window.location.href="view_category.php";
                </script>
        <?php
}
							?></td>
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