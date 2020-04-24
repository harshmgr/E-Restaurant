<?php
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
</head>
<body>
<div class="row">
	<?php
         $result = mysqli_query($conn,"SELECT * FROM menu");
		while($row = mysqli_fetch_assoc($result)){ 
            	?>
	<div>
		<div>
            <div>
                <div>
                    <div>
                        <a href="#"><img src=<?php echo $row['pimage'];?> alt="Product_Image" width="200px" height="100px"></a>
                            <div>
                                <div>
                                    <ul>
                                        <li><a href="#">Add To Cart</a></li>
                                        <li><a href="#">Wish list</a></li>
                                        <li><a href="#">Like</a></li>
                                    </ul>
                                </div>
                            </div>
                     </div>
                <div>
                <h2><a href="#" style="transform: translate(100px,10px);"><?php echo $row['pname'];?></a></h2>
                <div>
                    <div>
                        <span>Rs.<del>50.00</del></span>
                        <span><?php echo $row['price'];?></span>
                    </div>
                </div> 
                <div>
  					<div>Product Description</div>
  					<div><?php echo $row['pdescription']; }?>
  					</div>
				</div> 
            </div>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>