<?php
include("../db/db.php");
include("menu.php");
error_reporting(0);
$obj=new query();
$data=$obj->getData('tbl_user_details','');
?>
		<div class="main-grid">
			<div class="agile-grids">	
				<!-- tables -->
				
				<div class="table-heading">
					<h2>User Details</h2>
				</div>
				<div class="agile-tables">
					<div class="w3l-table-info">
					 
					    <table id="table">
						<thead>
						  <tr>
							<th>No.</th>
							<th>Name</th>
							<th>email</th>
							<th>Phone Number</th>
							<th>Address</th>
							<th>City</th>
							<th>State</th>
							<th>Pincode</th>
							<th>Picture</th>
							<th>Status</td>

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
							<td><?php echo $res['user_name']; ?></td>
							<td><?php echo $res['user_email']; ?></td>
							<td><?php echo  $res['user_ph_no']; ?></td>
							<td><?php echo $res['user_address']; ?></td>
							<td><?php echo $res['user_city']; ?></td>
							<td><?php echo $res['user_state']; ?></td>
							<td><?php echo $res['user_pincode']; ?></td>
							<td><img class="userimg" src="../<?php echo $res['user_pic']; ?>" /></td>
							<td><?php echo $res['user_status']; ?></td>
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