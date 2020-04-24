<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel=stylesheet href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styles.css?version=51">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="Contact">
	<header>
        <nav style="width: 100%; border-radius: 0 0 0 0; height: 70px;">
          <a href="index.html"><div class="logo"> <img src="images/logo.jpg" alt="Logo"><p style="font-family: 'Baloo Paaji 2', cursive; font-size: 50px; margin-top:-15px;">Harsh Restaurant</p></div></a>
           <div class="menu">
                        <ul class="ul">
                            <li class="li"><a href="index.html"><i class="fa fa-fw fa-home"></i>Home</a></li>
                            <li class="li"><a href="foodMenu.php"><i class="fa fa-cutlery" aria-hidden="true"></i> Food Menu</a></li>
                            <li class="li"><a href="#" class="active" ><i class="fa fa-pencil" aria-hidden="true"></i>Contact Us</a></li>
                            <li class="li"><a href="login.php"><i class="fa fa-fw fa-user"></i>Login</a></li>
                            <a href="cart.php" id="cart" title="Your Cart" ><img src="cart-icon.png" height="40px;"></a>
                            <a href="user.php" id="user"><i class="fa fa-user-circle fa-3x"aria-hidden="true" title="user"></i></a>
                        </ul>
                    </div>
        </nav>
    </header>
<div>
<?php
if(isset($_GET['query'])){
	$name= $_GET['nam'];
	$mail= $_GET['mail'];	
	$moblie= $_GET['mobile'];
	$request=$_GET['req']; 
   include 'connection.php';
   $sql= "INSERT INTO query(name,email,mobile,request) VALUES ('$name','$mail','$mobile','$request')";
   if (mysqli_query($conn,$sql)) {
    $id = mysqli_insert_id($conn);
?>
<div class="alert" style=" padding: 10px; margin-top:50px; width: 400px; text-align: center; position: absolute; float: left; background-color: #049850; color: white;" role="alert">
          <h4 class="alert-heading">Well done!</h4>
            <p>Our Representative will contact you soon to resolve the Query</p>
          <hr>
          <p class="mb-0">Your Complaint No. is <?php echo " ".$id ?></p>
        </div>
        <?php
      }
    }
        ?>

</div>
                <div class="con">
                	<form class="box" id="box1" action="ContactUs.php" onsubmit="return validate()">
                		<h1>Contact us</h1>
                		<h3>If you want more information fill in this form. You will be contacted as soon as possible.<br>
							Please fill in all required fields.</h3>
                		<label>Your Name*&nbsp;</label><input type="text" name="nam"><br>
                		<label>Your Email*&nbsp;</label><input type="email" name="mail"><br>
                		<label>Phone No*&nbsp;</label><input type="number" name="mobile"><br>
                		<label>Describe Your Request*</label><textarea id="area" name="req"></textarea><br>
                		<button value="Submit" name="query">Submit</button>

                	</form>
                </div>
           <script type="text/javascript">
           		function validate(){
           			var name=document.forms["box1"]["nam"];
           			var email=document.forms["box1"]["mail"];
           			var mob=document.forms["box1"]["mobile"];
           			var text=document.forms["box1"]["area"];
           			if (name.value=="") {
           				alert("Name cannot be Empty");
           				return false;
           			}
           			if(email.value==""){
           				alert("Email Feild cannot be Empty");
           				return false;
           			}
           			if(mob.value=="" || mob.value.length!=10){
           				alert("Invalid Number");
           				return false;
           			}
           			if (text.value.length<=20) {
           				alert("The problem should be minimum 20 characters.");
           				return false;
           			}
           			return true;
           		}
           </script>
            
</body>
</html>