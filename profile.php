<?php 
session_start();
if (!$_SESSION['uid']) {
    header("location:login.php");
}
?>
<!DOCTYPE html>

<head>
    <title>Restaurant</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav>
          <a href="HomePage.html"><div class="logo"> <img src="images/logo.jpg" alt="Logo"><p>Harsh Restaurant</p></div></a>
            <div class="menu">
            <ul>
                <li><a class="active"href="#">Home</a></li>
                <li><a href="foodMenu.php">Food Menu</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="ContactUs.php">Contact Us</a></li>
                <li><a href="#"><?php echo $_SESSION["name"];?></a>
            </ul>
        </div>
        </nav>
    </header>
    <slider>
    <slide><p>One cannot think well, love well, sleep well, if one has not dined well</p></slide>
    <slide><p>Everything you see I owe to spaghetti.</p></slide>
    <slide><p>A party without cake is just a meeting</p></slide>
    <slide><p>Welcome to our Restaurant</p></slide>
</slider>
    <script src="javascript.js"></script>
</body>

</html>