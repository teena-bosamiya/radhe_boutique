<?php
include("menu.php");
include("../db/db.php");
error_reporting(0);
$obj=new query();
$data=$obj->getData('tbl_order','');
?>
		<div class="main-grid">
			<div class="agile-grids">	
				<!-- tables -->
				
				<div class="table-heading">
					<h2>Sale Details</h2>
				</div>
				<div class="agile-tables">
					<div class="w3l-table-info">
					 
					    <table id="table">
						<thead>
						  <tr>
							<th>User Id</th>
							<th>Prodeuct Name</th>
							<th>Total</th>
						  </tr>
						</thead>
						<tbody>
						<?php 
							$i=1;
							foreach($data as $res)
							{
						?>
						  <tr>
							<td><?php echo $res['user_id'];?></td>
							<td><?php echo $res['pro_name'];?></td>
							<td><?php echo $res['total'];?></td>
						  </tr>
						  <?php
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