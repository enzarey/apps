<?php
	require('config.php');
	?>

<html>
<head>
<title>APPS: DIY</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="font-awesome.min.css">
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
    background-image: url('images/signinreg_.jpg');
    min-height: 100%;
}

/* Second image (VISION) */
.bgimg-2 {
    background-image: url("images/signinreg_.jpg");
    min-height: 400px;
}

/* Third image (MISSION) */
.bgimg-3 {
    background-image: url("images/signinreg_.jpg");
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

<!-- CAROUSEL CSS START-->
<style>
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
</style>
<!-- CAROUSEL CSS END -->

</head>
<body>

    <!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
     <!-- <i class="fa fa-bars"></i> -->
    </a>
    <a href="index_.php" class="w3-bar-item w3-button"><img src="images/APPSlogo-small.png"></a>
    <a href="index_.php" class="w3-bar-item w3-button">HOME</a>
    <a href="about_.php" class="w3-bar-item w3-button w3-hide-small"> ABOUT</a>
    <a href="blog_.php" class="w3-bar-item w3-button w3-hide-small">BLOG</a>
	<a href="actions.php" class="w3-bar-item w3-button w3-hide-small">GET INVOLVED</a>
    <a href="contact_.php" class="w3-bar-item w3-button w3-hide-small">CONTACT US</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red"><i class="fa fa-search"></i></a>
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
  <a href="index_.php" class="w3-bar-item w3-button" onclick="toggleFunction()"><img src="images/APPSlogo-small.png"></a>
   <a href="index_.php" class="w3-bar-item w3-button" onclick="toggleFunction()">HOME</a>
    <a href="about_.php" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="blog_.php" class="w3-bar-item w3-button" onclick="toggleFunction()">BLOG</a>
  <a href="actions.php" class="w3-bar-item w3-button" onclick="toggleFunction()">GET INVOLVED</a>
    <a href="contact_.php" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
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

<!-- First Parallax Image with REG/SIGN-IN buttons -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home" >
  <div class="w3-display-middle" style="white-space:nowrap;">
  <center>

 <span class="w3-large w3-text-black">Recycle. Reuse. Start building awasome things and earn from plastics!</span><br><br>

<!-- CAROUSEL HTML START-->
<div class="w3-content w3-display-container" style="max-width:800px">
  <iframe class="mySlides" width="720" height="380" src="https://www.youtube.com/embed/cbPt1Jn3YLw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
  <iframe class="mySlides" width="720" height="380" src="https://www.youtube.com/embed/vS191Y6cOFc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
  <iframe class="mySlides" width="720" height="380" src="https://www.youtube.com/embed/hXvLzfMGEjo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
  <iframe class="mySlides" width="720" height="380" src="https://www.youtube.com/embed/edXimuzIVhk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
  <iframe class="mySlides" width="720" height="380" src="https://www.youtube.com/embed/FbEcRdwhFEw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
  <iframe class="mySlides" width="720" height="380" src="https://www.youtube.com/embed/XXTnJtSPdZI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
<!--<iframe class="mySlides" width="720" height="380" src="https://www.youtube.com/embed/SHGVjg59zhU frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>-->
  <iframe class="mySlides" width="720" height="380" src="https://www.youtube.com/embed/qj2FOOfUql8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
  
  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(5)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(6)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(7)"></span>
<!--<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(8)"></span>-->
  </div>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>
<!-- CAROUSEL HTML END-->

   </center>
   </div>
   </div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey">Back to top</a><br>

<div class="w3-black w3-center w3-padding-24">All Rights Reserved 2018 <p class="glow"> <a href=http://jarksapps.ml>JARKS APPS</p></div>


</footer>
</body>
</html>