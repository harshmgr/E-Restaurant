<?php
session_start();
if ($_SESSION['uid']) {
	echo "<script> alert('You Must Logout First. We are redirecting to logout Page');</script>";
	echo "<script>setTimeout(\"location.href = 'logout.php';\",1500);</script>";
}
elseif (empty($_SESSION['uid'])) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel=stylesheet href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styles.css?version=51">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="login">
	<header>
        <nav style="width: 100%; border-radius: 0 0 0 0; height: 70px;">
          <a href="index.php"><div class="logo"> <img src="images/logo.jpg" alt="Logo"><p style="font-family: 'Baloo Paaji 2', cursive; font-size: 50px; margin-top:-15px;
">Harsh Restaurant</p></div></a>
           <div class="menu">
                        <ul class="ul">
                            <li class="li"><a href="index.php"><i class="fa fa-fw fa-home"></i>Home</a></li>                         
                            <li class="li"><a href="ContactUs.php"><i class="fa fa-pencil" aria-hidden="true"></i>Contact Us</a></li>
                            <li class="li"><a href="login.php" class="active"><i class="fa fa-fw fa-user"></i>Login</a></li>
                            </i></a>
                        </ul>
                    </div>
        </nav>
    </header>
    <div class="contain">
<?php
if(isset($_POST['query'])){
	$username=$_POST['user'];
	$password = md5($_POST["pass"]);
	include 'connection.php';
	$sql = "SELECT * FROM registration WHERE email_id = '$username' AND password = '$password'";
	$query = mysqli_query($conn,$sql);
	$count = mysqli_num_rows($query);
	//if user record is available in database then $count will be equal to 1
	if($count == 1){
		$row = mysqli_fetch_array($query);
		$_SESSION["uid"] = $row["reg_id"];
		$_SESSION["name"] = $row["fname"];
			echo "login Success";
			header("location:profile.php");
		}else{
			?>
    	<span style="color:black; font-size: 26px; ">Username or Password is invalid</span>
		<?php
	}

}	
?>
    <form class="form1" id="form1" action="login.php" method="POST" onsubmit="return validForm()">
    	<h1 id="log">LOGIN</h1>
    	<input type="text" name="user" id="ser" placeholder="Username" class="box"><br> <!-- harsh -->
    	<input type="password" name="pass" id="pass" placeholder="Password" class="box"><br>
    	<button value="Submit" name="query">Submit</button>
    </form>
    <span id="dont">Don't have an Account?</span><a id="reg" href="register.php">Register</a>
    </div>
    <script type="text/javascript">
    	function validForm() {
    		var use=document.forms["form1"]["user"];
    		var pas=document.forms["form1"]["pass"];
    		if (use.value=="") {
    			alert("UserName cannot be empty");
    			return false;
    		}
    		if(pas.value==""){
    			alert("Password Field cannot be empty");
    			return false;
    		}
    	}
    </script>
</body>
</html>
<?php
}
?>