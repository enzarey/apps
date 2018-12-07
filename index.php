<?php
	require('config.php');
	?>

<html>
<head>
<title>APPS: Against Plastic Pollution Society</title>
<meta charset="UTF-8">
<meta name="description" content="APPS (Against Plastic Pollution Society) is the first social awareness platform that aims to foster support and connections to individuals, local and international communities in promoting complete awareness on plastic pollution and ways of mitigating its harmful effects.">
<meta name="author" content="">
<meta name="google-site-verification" content="http://enzarey.github.io/apps/images/apps.png">
<meta name="keywords" content="plastic waste management, reuse, reduce, recycle, plastic management, plastic waste, environment-friendly, JARKS, APPS, Against Plastic Pollution Society, plastic pollution, eco-friendly, spread awareness, volunteer, cleanup">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="font-awesome.min.css">
<!-- PARALLAX FX STYLE -->
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('images/home_.jpg');
    min-height: 100%;
}

/* Second image (VISION) */
.bgimg-2 {
    background-image: url("images/home_.jpg");
    min-height: 400px;
}

/* Third image (MISSION) */
.bgimg-3 {
    background-image: url("images/home_.jpg");
    min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
</style>
<!-- STYLE GALING KAY KATE, PANGFOOTER DAW */  -->
<style>
/* Add a text color to links */
a {
    color: aqua;
}
.glow {
  font-size: 15px;
  color: #fff;
  text-align: top;
  -webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
     text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
  
  .footer {
   position: center;
  
   margin-top:-5px;
   height:78px;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black; 
   color: white;
   text-align: center;
   font-size: 10px;
   opacity: 0.9;
}

</style>

</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
	<a href="index.php" class="w3-bar-item w3-button"><img src="images/APPSlogo-small.png"></a>
    <a href="index.php" class="w3-bar-item w3-button">HOME</a>
    <a href="about.php" class="w3-bar-item w3-button w3-hide-small">ABOUT</a>
    <a href="blog.php" class="w3-bar-item w3-button w3-hide-small">BLOG</a>
	    <a href="involve.php" class="w3-bar-item w3-button w3-hide-small">GET INVOLVED</a>
    <a href="contact.php" class="w3-bar-item w3-button w3-hide-small">CONTACT US</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red">
     <i class="fa fa-search"></i>
    </a>
	  <p align="right">
	 <?php
	 	if($_SESSION['first_name'] <> ""){
		echo "Welcome, ".$_SESSION['first_name']." ".$_SESSION['last_name'];
		echo "&nbsp;<a href='index.php?logout=1'>Logout</a>";
		}
	 ?>
	</p>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
	<a href="index.php" class="w3-bar-item w3-button" onclick="toggleFunction()"><img src="images/APPSlogo-small.png"></a>
   <a href="index.php" class="w3-bar-item w3-button" onclick="toggleFunction()">HOME</a>
    <a href="about.php" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="blog.php" class="w3-bar-item w3-button" onclick="toggleFunction()">BLOG</a>
	<a href="involve.php" class="w3-bar-item w3-button" onclick="toggleFunction()">GET INVOLVED</a>
    <a href="contact.php" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
    <a href="#" class="w3-bar-item w3-button">SEARCH</a>
	  <p align="right">
	 <?php
	 	if($_SESSION['first_name'] <> ""){
		echo "Welcome, ".$_SESSION['first_name']." ".$_SESSION['last_name'];
		echo "&nbsp;<a href='index.php?logout=1'>Logout</a>";
		}
	 ?>
	</p>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div <!-- class="bgimg-1 w3-display-container w3-opacity-min" id="home" -->>
  <div class="w3-display-middle" style="white-space:nowrap;">
  <center><img src="images/APPSlogo.png"></center><br>
   <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">Against Plastic Pollution Society</span>
  </div>
</div>

<!-- Container (OBJECTIVES Section) -->
<div class="w3-content w3-container w3-padding-64" id="objectives">
  <h3 class="w3-center">OBJECTIVES</h3>
  <p align="center">
 APPS (Against Plastic Pollution Society) is the first social awareness platform devised by JARKS APPS, <br>
 which aims to foster support and connections to individuals, local and international communities in promoting awareness on<br>
 plastic pollution and ways of mitigating its harmful effects through long-term, sustainable, profitable and environment-friendly product development
 of plastic waste materials that will serve the needs of local communities and other social programs.<br>
  </p>
  </div>
 
<!-- Second Parallax Image with VISION Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
  </div>
</div>

<!-- Container (VISION Section) -->
<div class="w3-content w3-container w3-padding-64" id="vision">
  <h3 class="w3-center">VISION</h3>
  <p align="center">
	To be recognized as a socially responsible and committed platform that bridge connections among individuals,<br>
	private and social groups with the same goal of spreading the “Plastic Waste Clean-up Campaign”. <br>
  </p>
  </div>

<!-- Third Parallax Image with MISSION Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
  </div>
</div>

<!-- Container (MISSION Section) -->
<div class="w3-content w3-container w3-padding-64" id="mission">
  <h3 class="w3-center">MISSION</h3>
   <p align="center">
	 The mission of APPS is to empower individuals, local communities, private or social groups to collaborate, cooperate and promote awareness to everyone on proper plastic waste management.<br>
	 To showcase plastic recycling projects, movements and events that will help protect the environment against plastic pollution, generate profits and support struggling individuals.<br>
	 Encourage communities participate or create high-value plastic recycled products.<br>
  </p>
  </div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey">Back to top</a><br>

<div class="w3-black w3-center w3-padding-24">All Rights Reserved 2018 <p class="glow"> <a href=http://jarksapps.ml>JARKS APPS</p></div><br>

</footer>
 
</body>
</html>
