<?php
include("../db/db.php");
include("menu.php");
error_reporting(0);
$obj=new query();
$data=$obj->getData('tbl_contact','');
?>
		
			<div class="agile-grids">	
				<!-- tables -->
				
				<div class="table-heading">
					<h2>Contact</h2>
				</div>
				<div class="agile-tables">
					<div class="w3l-table-info">
					 
					    <table id="table">
						<thead>
						  <tr>
							<th>No.</th>
							<th>Name</th>
							<th>Email</th>
							<th>Massage</th>
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
							<td><?php echo $res['con_name'];?></td>
							<td><?php echo $res['con_email'];?></td>
							<td><?php echo $res['con_msg'];?></td>
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