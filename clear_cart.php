<?php
	session_start();
	unset($_SESSION['cart']);
	$_SESSION['message'] = '<div style="font-size:30px; background-color:#843083; color:#fff">Cart cleared successfully</div>';
	header('location: cart.php');
?>