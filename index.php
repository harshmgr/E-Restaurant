<?php
    session_start();
    if(isset($_SESSION["uid"])){
    header("location:profile.php");
} 
?>
<!DOCTYPE html>
<head>
    <title>Restaurant</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styles.css?version=51">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <nav style="width: 100%; border-radius: 0 0 0 0; height: 70px;">
          <a href="index.html"><div class="logo"> <img src="images/logo.jpg" alt="Logo"><p style="font-family: 'Baloo Paaji 2', cursive; font-size: 50px; margin-top:-15px;
">Harsh Restaurant</p></div></a>
           <div class="menu">
                        <ul class="ul">
                            <li class="li"><a href="index.php"><i class="fa fa-fw fa-home"></i>Home</a></li>
                            <li class="li"><a href="ContactUs.php"><i class="fa fa-pencil" aria-hidden="true"></i>Contact Us</a></li>
                            <li class="li"><a href="login.php"><i class="fa fa-fw fa-user"></i>Login</a></li>
                        </i></a>
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
</body>
</html>