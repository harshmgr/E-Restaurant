<?php 
session_start();
$conn=mysqli_connect('localhost','root','','project');
if(!$conn){
	echo 'Not Connected';
}
/*$result = mysqli_query($conn,"SELECT * FROM menu");
while($row = mysqli_fetch_assoc($result)){
	echo "<div class='product_wrapper'>
			  <form method='post' action=''>
			  <input type='hidden' name='code' value=".$row['pid']." />
			  <div class='image'><img src='".$row['pimage']."' /></div>
			  <div class='name'>".$row['pname']."</div>
		   	  <div class='price'>Rs.".$row['price']."</div>
			  <button type='submit' class='buy'>Buy Now</button>
			  <div class='desc'>".$row['pdescription']."</div>
			  </form>
		   	  </div>";
		   	}*/
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Menu List</title>
		<link rel="stylesheet" href="style.css?version=51">
		<link rel="stylesheet" type="text/css" href="css/styles.css?version=51">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2&display=swap" rel="stylesheet">
		<script src="src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		</head>
		<body class="food">
			<header>
				<nav style="width: 100%; border-radius: 0 0 0 0; height: 70px;">
					<a href="index.html"><div class="logo"> <img src="images/logo.jpg" alt="Logo"><p style="font-family: 'Baloo Paaji 2', cursive; font-size: 50px; margin-top:-15px;
">Harsh Restaurant</p></div></a>
					<div class="menu">
						<ul class="ul">
							<li class="li"><a href="profile.php"><i class="fa fa-fw fa-home"></i>Home</a></li>
							<li class="li"><a href="foodMenu.php"><i class="fa fa-cutlery" aria-hidden="true"></i> Food Menu</a></li>
							<li class="li"><a href="ContactUs.php"><i class="fa fa-pencil" aria-hidden="true"></i>Contact Us</a></li>
							<li class="li"><a href="login.php"><i class="fa fa-fw fa-user"></i>Login</a></li>
							<a href="cart.php" id="cart" title="Your Cart" ><img src="cart-icon.png" height="40px;"></a>
							<a href="user.php" id="user"><i class="fa fa-user-circle fa-3x"aria-hidden="true" title="<?php echo $_SESSION['name'];?>"></i></a>
						</ul>
					</div>
				</nav>
			</header>
		<div class="menuAll">
			<h2 class="menu-head">Our <span>Sub-Menu</span></h2>
			<p id="serve">We Serve delicious world class dishes to our Customer</p>

<div class="contai" style="background-color: #E2EFFF;">
	<?php
		$mid=$_GET['mid'];
		//if(isset($_GET['click'])){
			//$mid=$_GET['mid'];
         $result = mysqli_query($conn,"SELECT * FROM products where mid='$mid'");
		while($row = mysqli_fetch_assoc($result)){ 
    ?>
	<div class="card">
  <img src=<?php echo $row['pimage'];?> alt="Product_Image" width="300px" height="250px">
  <div class="navigation_bar">
        <ul style="list-style-type: none; display: flex;">
            <li><a href="#" style="text-decoration: none; margin-left:-40px;">Wish list</a></li>
            <li><a href="#" style="text-decoration: none; margin-left: 210px;">Like</a></li>
     	</ul>
   </div>
  <h2><a href="#" style="text-decoration: none;"><?php echo $row['pname'];?></a></h2>
  <div class="prices"><span class="price" style="margin-left: 50px;">&nbsp;&#8377; <?php echo $row['price'];?></span><p class="price" style="margin-top: 0px; margin-left: 10px;"><del>&#8377;<?php echo $row['oldprice'];?></del></p><p class="price"style="margin-top: 0px; margin-left:30px;"><?php $original = $row['oldprice'];
$sold_price = $row['price'];
$discount = $original-$sold_price;
$discountPercentage=($discount/$original)*100;
echo $dis=ceil($discountPercentage);
?>% off</p></div> 
  <p><button style="margin-bottom: 0px;">ORDER NOW</button></p>
</div>
<?php } ?>
</div>
<footer class="footer-distributed">

			<div class="footer-right">

				<a href="https://www.facebook.com/harsh.arya.mgr"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-instagram"></i></a>
				<a href="https://github.com/harshmgr"><i class="fa fa-github"></i></a>

			</div>

			<div class="footer-left">

				<p class="footer-links">
					<a class="link-1" href="#">Home</a>

					<a href="#">Menu</a>

					<a href="#">Login</a>

					<a href="#">Register</a>

					<a href="#">Faq</a>

					<a href="#">Contact Us</a>
				</p>

				<p style="text-align: center; font-size: 30px;">Harsh Kumar &copy; 2019-21</p>
			</div>

		</footer>
	</div>
</body>
</html>