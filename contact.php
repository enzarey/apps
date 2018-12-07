<?php
	require('config.php');

	if (isset($_POST['submit'])){
		$name = $_POST['name'];
		$subject = $_POST['subject'];
		$mailFrom = $_POST['mail'];
		$message = $_POST['message'];

		$mailTo = "jarks.APPS@gmail.com";
		$headers = "From: ".$mailFrom;
		$txt = "You have received an email from ".$name.".\n\n".$message;
		
		mail($mailTo, $subject, $txt, $headers );
		header("Location: index.php?mailsend");
				
	}
	?>

<html>
<head>
<title>APPS: Contact Us</title>
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
    background-image: url('images/chat_.jpg');
    min-height: 100%;
}

/* Second image (VISION) */
.bgimg-2 {
    background-image: url("images/chat_.jpg");
    min-height: 400px;
}

/* Third image (MISSION) */
.bgimg-3 {
    background-image: url("images/chat_.jpg");
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

<!-- Container (MAPS Section) -->
<div class="w3-content w3-container w3-padding-64" id="objectives">
  <p>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.1572502466724!2d121.07949571435687!3d14.590113889809174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b7d87ba2c399%3A0xf28bfdd051dc637e!2sOrtigas+Ave%2C+Pasig%2C+Metro+Manila%2C+Philippines!5e0!3m2!1sen!2sua!4v1537691402501" width="600" height="450" frameborder="0" style="border:0" allowfullscreen align="left"></iframe>
  </p>
  <p align="left">
   
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h>Against Plastic Pollution Society</h> <br><br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email Address: jarks.Apps@gmail.com <br><br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact the <a href="jarksapps.php" target="_blank">Site Developer</a> 
  </p>
  </div>
 
<!-- Second Parallax Image with VISION Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-black w3-wide">CONTACT US</span>
  </div>
</div>

<!-- Container (VISION Section) -->
<div class="w3-content w3-container w3-padding-64" id="vision">

<form action="mail.php" method="POST">
<p>Name</p> <input type="text" name="name">
<p>Email</p> <input type="text" name="mail">
<!--<p>Contact Number</p> <input type="text" name="phone"> -->

<!--<p>Request Phone Call:</p>
Yes:<input type="checkbox" value="Yes" name="call"><br />
No:<input type="checkbox" value="No" name="call"><br /> -->

<!--<p>Website</p> <input type="text" name="website"> -->

<!--<p>Priority</p>
<select name="priority" size="1">
<option value="Low">Low</option>
<option value="Normal">Normal</option>
<option value="High">High</option>
<option value="Emergency">Emergency</option>
</select>
<br /> -->

<p>Concern</p>
<select name="subject" size="1">
<option value="update">Volunteering Events</option>
<option value="change">Networking</option>
<option value="addition">Contributing written materials</option>
<option value="new">Others</option>
</select>
<br />

<p>Message</p><textarea name="message" rows="6" cols="50"></textarea><br />
<!--<input type="submit" value="Send" name="submit"> <input type="reset" value="Clear">-->
</form>

<button onclick="myFunction()">Send

<script>
function myFunction() {
    alert("Message sent!");
}

</script>

<script type="text/javascript">
    function pageRedirect() {
        window.location.replace("http://jarks.freevar.com/");
    }      
    setTimeout("pageRedirect()", 10000);
</script>
</button>
<input type="reset" value="Clear">
</form>

  </div>
  


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey">Back to top</a><br>

<div class="w3-black w3-center w3-padding-24">All Rights Reserved 2018 <p class="glow"> <a href=http://jarksapps.ml>JARKS APPS</p></div>


</footer>
 
</body>
</html>
