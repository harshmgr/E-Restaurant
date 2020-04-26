<!DOCTYPE html>
<html>
<head>
  <link rel=stylesheet href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styles.css?version=51">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 25%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  margin-top: 50px;
  padding: 10px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
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
<div class="about-section">
  <h1 style="font-size: 50px;">About Us</h1>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/team1.jpg" alt="Harsh" style="width:100%">
      <div class="container">
        <h2>Harsh Kumar</h2>
        <p class="title">CEO & Founder</p>
        <p>Studying At DYPIMR,Pune</p>
        <p>kumarharsh8549@gmail.com</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/team2.jpg" alt="anish" style="width:100%">
      <div class="container">
        <h2>Anish Rai</h2>
        <p class="title">Art Director</p>
        <p>anish@gmail.com</p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="/w3images/team3.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>John Doe</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>john@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="/w3images/team3.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>John Doe</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>john@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
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

                    <a href="#">About Us</a>
                </p>

                <p style="text-align: center; font-size: 30px;">Harsh Kumar &copy; 2019-21</p>
            </div>

        </footer>
</body>
</html>
