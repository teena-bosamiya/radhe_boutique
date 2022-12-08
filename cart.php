<?php
include("db/db.php");
$obj=new query();
session_start();
include("menu.php");
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			 $condition_arr=array('pro_id'=>$_REQUEST['id']);
	$data=$obj->getData('tbl_product',$condition_arr);
			$itemArray = array($data[0]["pro_name"]=>array('pro_name'=>$data[0]["pro_name"], 'id'=>$data[0]["pro_id"], 'quantity'=>$_POST["quantity"], 'pro_price'=>$data[0]["pro_price"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($data[0]["pro_name"],$_SESSION["cart_item"])) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($data[0]["pro_name"] == $k)
								$_SESSION["cart_item"][$k]["quantity"] = $_POST["quantity"];
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["id"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>
<div id="page-content-wrapper">
            <a href="#menu-toggle" class="menuopener" id="menu-toggle"><i class="fa fa-bars"></i></a>
			
            <div class="all-page-bar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="title title-1 text-center">
								<div class="title--heading">
									<h1>Cart List</h1>
								</div>
								<div class="clearfix"></div>
								<ol class="breadcrumb">
									<li><a href="index.php">Home</a></li>
									<li class="active">Cart List</li>
								</ol>
								
							</div>
							<!-- .title end -->
						</div>
					</div>
				</div>
			</div><!-- end all-page-bar -->

            <div id="services" class="section lb">
                <div class="container-fluid">
                    <div class="section-title row text-center">
                        <div class="col-md-8 col-md-offset-2">
                        <small>Radhe Boutique</small>
                        <h3>Cart List</h3>
                        <hr class="grd1">
                        
                        </div>
                    </div><!-- end title -->

                    <div class="row"><?php
if(isset($_SESSION["cart_item"])){
    $item_total = 0;
?>
                        <table class="table table-bordered">
							<thead>
								<tr>
									<th>Name</th>
									<th>Quentity</th>
									<th>Price</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							<?php		
    foreach ($_SESSION["cart_item"] as $item){
		?>
								<tr>
									<td><?php echo $item["pro_name"]; ?></td>
									<td><span class="badge"><?php echo $item["quantity"]; ?></span></td>
									<td><span class="badge"><?php echo "&#8377 ".$item["pro_price"]; ?></span></td>
									<td><span class="badge badge-danger"><a style="color:white;" href="cart.php?action=remove&id=<?php echo $item["pro_name"]; ?>" class="btnRemoveAction">Remove Item</a></span></td>
								</tr>
								<?php
        $item_total += ($item["pro_price"]*$item["quantity"]);
		}
		?>
								<tr>
									<td><code>Total</code></td>
									<td colspan="2"><span class="badge badge-primary">Rs. <?php echo "&#8377 $item_total"; ?></span></td>
									<td><a id='gobutton'  href="order.php?t=<?php echo $item_total; ?>" class='more_btn'>Place Order</a></td>
								</tr>
								<tr>
									<th class='more_btn'><a id="btnEmpty" href="cart.php?action=empty">Remove All Item</a></th>
								</tr>
							</tbody>
						</table>
						<?php
 }
?>
                    </div>
                    <hr class="invis4">

                    <div class="text-center">
                        <a href="products.php" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">View All Products Of RB.</a>
                    </div>
                </div><!-- end container -->
            </div><!-- end section -->
<!-- //about -->
	<?php
	include("footer.php");
	?>