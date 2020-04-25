<?php
session_start();
if($_SESSION["uid"]){
unset($_SESSION["uid"]);
unset($_SESSION["name"]);
}?>
<!DOCTYPE html>
<html>
<head>
	<title>Logged Out</title>
</head>
<body>
<h1 style="font-size: 200px; padding: 0; margin: 0;">You are sucessfully Logged Out. Redirecting you to login page.</h1>
</body>
</html>

<?php
echo "<script>setTimeout(\"location.href = 'login.php';\",1500);</script>";

?>