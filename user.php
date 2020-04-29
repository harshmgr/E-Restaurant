<?php 
include 'connection.php';
session_start();
if (!$_SESSION['uid']) {
    header("location:login.php");
}
$user=$_SESSION['uid'];
$sql="select * from registration where reg_id=$user";
$result=mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)){ 
    
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $_SESSION['name'];?> Profile</title>
    <link rel=stylesheet href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styles.css?version=51">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
    input{
        width: 270px;
        text-align: center;
        border-radius: 10px;
        height: 30px;
        font-size: 20px;
    }
    label{
        color: #fff;
    }
    .md-form{
        margin-top: 10px;
	
    }
    </style>
</head>
<body style="background: url(user_bg.jpg); background-size:cover;">
    <header>
        <nav style="width: 100%; border-radius: 0 0 0 0; height: 50px;">
          <a href="index.php"><div class="logo"> <img src="images/logo.jpg" alt="Logo"><p style="font-family: 'Baloo Paaji 2', cursive; font-size: 50px; margin-top:-15px;
">Harsh Restaurant</p></div></a>
           <div class="menu">
                        <ul class="ul">
                            <li class="li"><a href="index.php"><i class="fa fa-fw fa-home"></i>Home</a></li>
                            <li class="li"><a href="foodmenu.php"><i class="fa fa-cutlery" aria-hidden="true"></i> Food Menu</a></li>
                            <li class="li"><a href="ContactUs.php"><i class="fa fa-pencil" aria-hidden="true"></i>Contact Us</a></li>
                            <li class="li"><a href="login.php"><i class="fa fa-fw fa-user"></i>Login</a></li>
                            <a href="cart.php" id="cart" title="Your Cart" ><img src="cart-icon.png" height="40px;"></a>
                            <a href="user.php" id="user"><i class="fa fa-user-circle fa-3x"aria-hidden="true" title="<?php echo $_SESSION['name'];?>"></i></a>
                        </ul>
                    </div>
        </nav>
    </header>
<div style="width: 400px; background-color: rgba(10,110,132,0.9); color: white; transform: translate(550px,15px); border-radius: 7px;">

    <h5 style="background-color: #aaaa1c; text-align: center; font-size: 30px; color:#fff;">UPDATE PROFILE</h5>
    <div>
        <form class="text-center" style="color: #757575; display: grid; grid-gap: 10px; text-align: center;" action="update.php" method="GET">

            <div>
                <div>
                    <div style="padding: 0px;">
                        <label>First name</label><br>
                        <input type="text" name="fname"  value="<?php echo $row['fname']?>" required>
                    </div>
                </div>
                    <div class="md-form">
                        <label>Last name</label><br>
                        <input type="text"  name="lname" value="<?php echo $row['lname'] ?>" required>
                        
                    </div>
            </div>
            <div class="md-form">
                <label>E-mail</label><br>
                <input type="email"  name="mail" value="<?php echo $row['email_id']?>" required>
                
            </div>
            <div class="md-form">
                 <label>Registration Id</label><br>
                <input type="text" name="reg_id" value="<?php echo $row['reg_id']?>" readonly>
               
            </div>
            <div class="md-form">
                <label>Phone number</label><br>
                <input type="text" name="mobile" value="<?php echo $row['mobile'] ?>" required>
                
            </div>

            <div class="md-form">
                 <label>Date of Birth</label><br>
                <input type="date" name="dob" value="<?php echo $row['dob']?>" required>
               
            </div>
            


            <div class="md-form">
                 <label>Gender</label><br>
                <input type="text" name="gender" value="<?php echo $row['gender'] ?>" required>
               
            </div>
            <button class="btn btn-primary" type="submit">UPDATE</button>
        </form>
        <a href="logout.php" style="text-decoration: none;"><button style="margin-top: 0px;">Logout</button></a>

</script>
    </div>

</div>
<hr style="width:5px;">
<footer class="footer-distributed">

            <div class="footer-right">

                <a href="https://www.facebook.com/harsh.arya.mgr"><i class="fa fa-facebook"></i></a>
                <a href="https://twitter.com/harsh_mgr"><i class="fa fa-twitter"></i></a>
                <a href="https://www.instagram.com/harsh.mgr/"><i class="fa fa-instagram"></i></a>
                <a href="https://github.com/harshmgr"><i class="fa fa-github"></i></a>

            </div>

            <div class="footer-left">

                <p class="footer-links">
                    <a class="link-1" href="index.php">Home</a>

                    <a href="foodMenu.php">Menu</a>

                    <a href="login.php">Login</a>

                    <a href="register.php">Register</a>

                    <a href="contactUs.php">Contact Us</a>

                    <a href="aboutUs.php">About Us</a>
                </p>

                <p style="text-align: center; font-size: 30px;">Harsh Kumar &copy; 2019-21</p>
            </div>

        </footer>
</body>
</html>
<?php
}
?>
