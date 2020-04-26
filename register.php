<?php
session_start();
if($_SESSION["uid"]){
unset($_SESSION["uid"]);
unset($_SESSION["name"]);
}
if(isset($_POST['submit'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$password=md5($_POST['pass']);
	$mail=$_POST['mail'];
	$mobile=$_POST['mobile'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
$conn=mysqli_connect('localhost','root','','project');
if($conn)
{
	echo 'connected';
	$sql="insert into registration(reg_id,fname,lname,email_id,password,mobile,dob,gender) VALUES (NULL, '$fname', '$lname', '$mail', '$password', '$mobile', '$dob', '$gender')";
	if(mysqli_query($conn,$sql)){
	echo "Data Inserted";
	}
	else{
		echo "<script>alert('User already registered with same mobile number');</script>";

	}
}
else{
	echo "Error".mysqli_error($conn);
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel=stylesheet href="style.css?version=51">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styles.css?version=51">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="register">
	<header>
        <nav style="width: 100%; border-radius: 0 0 0 0; height: 70px;">
          <a href="index.html"><div class="logo"> <img src="images/logo.jpg" alt="Logo"><p style="font-family: 'Baloo Paaji 2', cursive; font-size: 50px; margin-top:-15px;">Harsh Restaurant</p></div></a>
           <div class="menu">
                        <ul class="ul">
                            <li class="li"><a href="index.php"><i class="fa fa-fw fa-home"></i>Home</a></li>
                            <?php if(!empty($_SESSION['uid'])){ echo "<li class='li'><a href='foodMenu.php'><i class='fa fa-cutlery' aria-hidden='true'></i> Food Menu</a></li>";}?>
                            <li class="li"><a href="#" class="active" ><i class="fa fa-pencil" aria-hidden="true"></i>Contact Us</a></li>
                            <li class="li"><a href="login.php"><i class="fa fa-fw fa-user"></i>Login</a></li>
                            <?php if(!empty($_SESSION['uid'])){ echo "<a href='cart.php' id='cart' title='Your Cart' ><img src='cart-icon.png' height='40px;''></a>
                            <a href='user.php' id='user'><i class='fa fa-user-circle fa-3x'aria-hidden='true' title='user'></i></a>";} ?>
                        </ul>
                    </div>
        </nav>
    </header>
    <div class="reg">
    	<form id="regi" method="POST" onsubmit="return validation()" action="register.php">
    		<h1>Registration Form</h1>
    		<label>First Name:</label>
    		<input type="text" name="fname" class="box"><br><br>
    		<label>Last Name:</label>
    		<input type="text" name="lname" class="box"><br><br>
    		<label>E-mail Id:</label>
    		<input type="email" name="mail" class="box"><br><br>
    		<label>Password:</label>
    		<input type="password" name="pass" class="box"><br><br>
    		<label>Retype Password:</label>
    		<input type="password" name="repassword" class="box"><br><br>
    		<label>Mobile No:</label>
    		<input type="number" name="mobile" class="box"><br><br>
    		<label>Date of Birth:</label>
    		<input type="date" name="dob" class="box" max="2000-01-01"><br>
    		<div class="gen">
                <label>Gender</label>
    		  <label><input type="radio" name="gender" value="male" checked>Male
    		  <label><input type="radio" name="gender" value="female">Female<br>
    		</div>
            <button type="submit" id="submit" name="submit">Register</button>
    	</form>
    </div>
    <script type="text/javascript">
    	function validation(){
    		var fnam=document.forms["regi"]["fname"];
    		var lnam=document.forms["regi"]["lname"];
    		var email=document.forms["regi"]["mail"];
    		var password=document.forms["regi"]["pass"];
    		var repass=document.forms["regi"]["repassword"];
    		var mob=document.forms["regi"]["mobile"];
    if (fnam.value == "")                                  
    { 
        window.alert("Please enter First Name.");
        return false; 
    } 
   
    if (lnam.value == "")                               
    { 
        window.alert("Please enter Last Name.");
        return false; 
    } 
       
    if (email.value == "")                                   
    { 
        window.alert("Please enter a valid e-mail address.");
        return false; 
    } 
    if (password.value == "" || password.value.length<6)                        
    { 
        window.alert("Password Length should be greater or equal to 6"); 
        return false; 
    } 
   
    if (repass.value=="" || repass.value.length<6)                  
    { 
        alert("Please ReType Password"); 
        return false; 
    } 
    if(password.value!=repass.value){
    	alert("Password doesn't match");
    	return false;
    }
    if(mob.value=="" ||mob.value.length!=10){
    	alert("Mobile Number is incorrect");
    	return false;
    }
   
    return true; 
    	}
    </script>
</body>
</html>