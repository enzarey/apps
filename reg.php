<?php
	 error_reporting(E_ALL & ~E_NOTICE);
	include('config.php');
	?>
	
<html>
<title>APPS: Against Plastic Pollution Society REGISTER</title>
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
    <a href="blog.php" class="w3-bar-item w3-button w3-hide-small"> BLOG</a>
	 <a href="involve.php" class="w3-bar-item w3-button w3-hide-small">GET INVOLVED</a>
    <a href="contact.php" class="w3-bar-item w3-button w3-hide-small">CONTACT US</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red"></a>
     <i class="fa fa-search"></i>
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
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home" >
  <div class="w3-display-middle" style="white-space:nowrap;">
  <center><img src="images/APPSlogo.png"></center><br>
   <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">Against Plastic Pollution Society</span>
  </div>
</div>

<!-- Container (OBJECTIVES Section) -->
<div class="w3-content w3-container w3-padding-64" id="objectives">
  <h3 class="w3-center">REGISTER</h3>
  <p class="w3-center">
  <!-- PHP for REG START-->
  <?php
  //DISPLAY DATA INPUT

    $first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	//$org_name = $_POST['org_name'];
	//$website = $_POST['website'];
	//$country = $_POST['country'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	//$usertype_id = $_POST['usertype_id'];
	
		if($_POST['btnReg']) {
		//echo "First Name:".$first_name;
		//echo "Last Name:".$last_name;
		//echo "Organization:".$org_name;
		//echo "Website: ".$website;
		//echo "Country: ".$country;
		//echo "Email address: ".$email;
		//echo "Username: ".$username;	
		//echo "Password:  ".$password;
		//echo "User type: ".$usertype_id;
		
		//DATABASE INSERTION
        
$conn = new mysqli("localhost", "1116579", "GOFORGOLD2018", "1116579db2");
if ($conn->connect_error) { 
	die("Connection failed: " . $conn->connect_error);
}else{
	//MYSQL INSERTION
$strInsert = "INSERT INTO tbl_apps(first_name,last_name,org_name,email,username,password)
                      VALUES('$first_name','$last_name','$org_name','$email','$username','$password')";
		  
$insert = $conn->query($strInsert);
header("location:sign-in.php");
echo "<br>You are now registered! <a href='sign-in.php'>Please Sign-in</a>";
$conn->close();
}
	//------------------
	}
//------------------
  
    echo "<center>";
	echo "<FORM name='register' method='POST'>";
	echo "First Name: <input type='text' name='first_name' required><br>";
	echo "Last Name: <input type='text' name='last_name' required><br>";
	//echo "Do you belong to an organization? <input type=radio name=org_name value=Yes>Yes<input type=radio name=org_name  value=No>No<br>";
	//echo "Organization (if any): <input type='text' name='org_name'><br><br>";
	//echo "Website: <input type='text' name='website'><br>";
	//echo "Country: <input type='text' name='country'><br>";
	echo "Email address: <input type='email' name='email' required><br>";
	echo "Username: <input type='text' name='username' required><br>";
	echo "Password: <input type='password' name='password' required><br>";
	echo "<input type='submit' value='Register' name='btnReg'>";
	echo "</FORM>";
	echo "</center>";
?> 
	<!-- PHP for REG END-->
  </p>
  </div>
 
<!-- Second Parallax Image -->
<div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    
  </div>
</div>

<!-- Container-->
<div class="w3-content w3-container w3-padding-64" id="vision">

  </div>



<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey">Back to top</a>
</footer>
 


</body>
</html>
