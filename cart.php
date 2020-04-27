<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Shopping Cart</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css?version=51">
		<link rel="stylesheet" type="text/css" href="css/styles.css?version=51">
		<link href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2&display=swap" rel="stylesheet">
		<style type="text/css">
			body{
				background-color: #d2f8d2;
			}
			.cartform{
				text-align: center;
				position: absolute;
				transform: translate(250px,100px);
			}
			table{
				 font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  				border-collapse: collapse;
  				width: 100%;
			}
			thead th{
				width: 200px;
			}
			thead th:nth-child(1){
				width:auto;
			}
			tbody td{
				text-align: center;
			}
			table td,table th{
				 border: 1px solid #ddd;
			}
			table tr:nth-child(even){
				background-color: #f2f2f2;
			}

			table tr:hover {
				background-color: #ddd;
			}
			table th {
					font-size: 20px;
  					padding-top: 12px;
  					padding-bottom: 12px;
  					text-align: center;
  					background-color: #4Faac0;
  					color: white;
				}
			table td{
				font-size: 25px;
			}
			#sub{
						border-radius: 5px;
						margin-top: 40px;
						font-size: 30px;
  						background-color: white; 
  						color: black; 
  						border: 2px solid #008CBA;
				}

			#sub:hover {
						text-rendering: auto;
  						background-color: #008CBA;
  						color: white;
					}

		}
		</style>
</head>
<body>
	
	<header>
				<nav style="width: 100%; border-radius: 0 0 0 0; height: 70px;">
					<a href="index.html"><div class="logo"> <img src="images/logo.jpg" alt="Logo"><p style="font-family: 'Baloo Paaji 2', cursive; font-size: 50px; margin-top:-15px;
">Harsh Restaurant</p></div></a>
					<div class="menu">
						<ul class="ul">
							<li class="li"><a href="index.php"><i class="fa fa-fw fa-home"></i>Home</a></li>
							<li class="li"><a href="foodMenu.php"><i class="fa fa-cutlery" aria-hidden="true"></i> Food Menu</a></li>
							<li class="li"><a href="ContactUs.php"><i class="fa fa-pencil" aria-hidden="true"></i>Contact Us</a></li>
							<li class="li"><a href="login.php"><i class="fa fa-fw fa-user"></i>Login</a></li>
							<a href="cart.php" id="cart" title="cart" ><img src="cart-icon.png" height="40px;"></a>
							<a href="user.php" id="user"><i class="fa fa-user-circle fa-3x"aria-hidden="true" title="<?php echo $_SESSION['name'];?>"></i></a>
						</ul>
					</div>
				</nav>
			</header>
<div class="cartform">
	<h1 style="font-family: poppins; font-size: 40px; background-color: #485ec2; color: #fff; border-radius:7px;">Cart Details</h1>
	<div class="row">
		<div>
			<?php 
			if(isset($_SESSION['message'])){
				?>
				<div>
					<?php echo $_SESSION['message']; ?>
				</div>
				<?php
				unset($_SESSION['message']);
			}

			?>
			<form method="POST" action="save_cart.php">
			<table>
				<thead>
					<th></th>
					<th>Item Photo</th>
					<th>Name</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>Sub. Total</th>
					
				</thead>
				<tbody>
					<?php
						//initialize total
						$total = 0;
						if(!empty($_SESSION['cart'])){
						//connection
						include "connection.php";
						//create array of initail qty which is 1
 						$index = 0;
 						if(!isset($_SESSION['qty_array'])){
 							$_SESSION['qty_array'] = array_fill(0, count($_SESSION['cart']), 1);
 						}
						$sql = "SELECT * FROM products WHERE pid IN (".implode(',',$_SESSION['cart']).")";
						$result=mysqli_query($conn,$sql);
							while($row = mysqli_fetch_assoc($result)){
								?>
								<tr>
									<td>
										<a href="delete_item.php?id=<?php echo $row['pid']; ?>&index=<?php echo $index; ?>"><span><i class="fa fa-trash-o" aria-hidden="true"></i></span></a>
									</td>
									<td><img src="<?php echo $row['pimage'];?>" style="width: 120px;"></td>
									<td><?php echo $row['pname']; ?></td>
									<td><?php echo number_format($row['price'], 2); ?></td>
									<input type="hidden" name="indexes[]" value="<?php echo $index; ?>">
									<td><input type="text" class="form-control" value="<?php echo $_SESSION['qty_array'][$index]; ?>" name="qty_<?php echo $index; ?>"></td>

									<td><?php echo number_format($_SESSION['qty_array'][$index]*$row['price'], 2); ?></td>
									<?php $total += $_SESSION['qty_array'][$index]*$row['price']; ?>
								</tr>
								<?php
								$index ++;
							}
						}
						else{
							?>
							<tr>
								<td colspan="6" class="text-center">No Item in Cart</td>
							</tr>
							<?php
						}

					?>
					<tr>
						<td colspan="5" align="right"><b>Total</b></td>
						<td><b><?php echo number_format($total, 2); ?></b></td>
					</tr>
				</tbody>
			</table>
			<input type="submit" name="save" value="Save Changes" id="sub">
			<a href="clear_cart.php" style="text-decoration: none; border: 2px solid #39a840; font-size: 30px; font-family: sans-serif; padding: 2px; color: #ffaabb; float: left; margin-top: 40px; border-radius: 5px; "><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>Clear Cart</a>
			<a href="checkout.php" style="text-rendering: auto;text-decoration: none; border: 2px solid #000; padding 1px; background-color: #4fabcc; font-size: 30px; float: right; margin-top: 40px; padding: 2px; border-radius: 5px; color: #fff"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Checkout</a>
			</form>
		</div>
	</div>

</div>
</body>
</html>