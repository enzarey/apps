<!-- Need to create a folder for contact form in the website-->
<!--To test this email function - will have errors via localhost do:
			//[1] Change php.ini file inside localhost server
			//[2] Upload to an online server(website), put in  a diiff directory
			
			
<!--?php
if (isset($_POST['send'])){
		
		$name = $_POST['fullname'];
		$inquiry = $_POST['inquiry type'];
		$mailfrom = $_POST['email'];
		$message = $_POST['message'];
		
		
		$mailto ="jarks.Apps@gmail.com";
		$headers = "From: ".$emailfrom;
		$maildoc = "You received an email from ".$name.".\n\n".$message;
		
	
		mail($mailto, $inquiry, $maildoc, $headers);
}		
		header("Location:home.php? Mail sent");
	
	

?>-->
<?php             //contactform viewer - need to add database
				
				
		    $conn = new mysqli("localhost", "1116579", "GOFORGOLD2018", "1116579db2");
				 
	          //MYSQL folder name : contact form
					
                    $sqlSelect = "SELECT * FROM tbl_contactform ORDER BY contact_id ASC";
							  
		    $result = $conn->query($sqlSelect);
		     if ($result->num_rows > 0) {
						
				  while($row = $result->fetch_assoc()) {
					$contact_id  =   $row['contact_id'];
			                $inquiry =   $row['inquiry_type'];
					$message  =   $row['message'];
				        $date_input  =   $row['date_input'];
					$name  =   $row['fullname'];
					$message_path  =   $row['message_path'];
																			
									
					echo "<p>";	
					echo "<h1>".$inquiry."</h1><br>";
					echo "<type='contactform/$message_path' class='txt'><br><br>";
					echo 	$message;
					echo "</p>";
					echo "<br>";
				  }
			 }
 
?>
					

	

<!DOCTYPE html>
<html>
<title>JARKS APPS VCARD</title>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link href="js/ninja-slider.css" rel="stylesheet" />
<script src="js/ninja-slider.js"></script>
<link href="js/thumbnail-slider.css" rel="stylesheet" type="text/css" />
<script src="js/thumbnail-slider.js" type="text/javascript"></script>
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
.w3-third img{margin-bottom: -6px; opacity: 0.8; cursor: pointer}
.w3-third img:hover{opacity: 1}

/* Add a text color to links */
a {
    color: aqua;
}
.glow {
  font-size: 30px;
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
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-dark-grey  w3-animate-left w3-text-aqua w3-collapse w3-top w3-center" style="z-index:3;width:300px;font-weight:bold" id="mySidebar" ><br>
  <h3 class="w3-padding-64 w3-center"><b>JARKS<br>APPS</b></h3>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-hide-large">CLOSE</a>
  <a href="#" onclick="w3_close()" class="w3-bar-item w3-button">Our Services</a> 
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">About JARKS APPS</a> 
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">Contact Us</a>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-white w3-xlarge w3-padding-16">
  <span class="w3-left w3-padding">Our Objective</span>
  <a href="javascript:void(0)" class="w3-right w3-button w3-white" onclick="w3_open()">☰</a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Push down content on small screens --> 
  <div class="w3-hide-large" style="margin-top:50px"></div>
  
  <!-- Start Free jQuery Slider BODY section 
<div style="width:1000px;margin:80px auto;">
        <div id="ninja-slider" style="float:left;">
            <div class="slider-inner">
                <ul>
                    <li><a class="ns-img" href="images/jarks3.jpg"></a></li>
                    <li><a class="ns-img" href="images/jarks5.jpg"></a></li>
                    <li><a class="ns-img" href="images/jarks4.jpg"></a></li>
                    <li><a class="ns-img" href="images/jarks1.jpg"></a></li>
                </ul>
                <div class="fs-icon" title="Expand/Close"></div>
            </div>
        </div>
        <div style="clear:both;"></div>
    </div>
 End Free jQuery Slider BODY section -->

  <div class="w3-row">
    <div class="w3-third">
      <img src="images/jarks3.jpg" style="width:300%" onclick="onClick(this)" alt="Website Development">
 <!--     <img src="images/jarks5.jpg" style="width:100%" onclick="onClick(this)" alt="Web Design and Architecture">
      <img src="images/jarks4.jpg" style="width:100%" onclick="onClick(this)" alt="Data Science and Analytics">
	  <img src="images/jarks1.jpg" style="width:100%" onclick="onClick(this)" alt="Security and System Support">-->
    </div>
  </div>

  <!-- Pagination 
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>--->
  
  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

  <!-- About section -->
  <div class="w3-container w3-black w3-hover w3-center w3-text-light-grey w3-padding-32" id="about">
    <h4><b><div class="w3-black w3-center w3-padding-24"><p class="glow" fontsize="16"> JARKS APPS</p></div><br></b></h4>
    <!--<img src="/images/jarkslogo.jpg" alt="Jarks" class="w3-image w3-padding-32" width="200" height="200">-->
    <div class="w3-content w3-justify" style="max-width:800px">
      <h4>Who we are</h4>
      <p>JARKS APPS is start-up Tech Company founded by STEM Scholars which aims to build and develop full functioning and interactive websites for businesses and personal use.</p><br>
	  <h5>Company Objective</h5>
      <p>To deliver quality and innovative technology and services that will help promote businesses and personal investments through different online  and social media platform.</p><br>
	  <h5>Mission</h5>
      <p>To be dedicated and passionate in building AWESOME websites for personal and business growth. </p> <br>
      <hr class="w3-opacity">
      <h4 class="w3-padding-16">Our Success Stories</h4>
      <p class="w3-wide">Web Development</p>
      <div class="w3-white">
        <div class="w3-container w3-padding-small w3-center w3-yellow" style="width:95%">95%</div>
      </div>
      <p class="w3-wide">Web Design and Architechture</p>
      <div class="w3-white">
        <div class="w3-container w3-padding-small w3-center w3-purple" style="width:85%">93%</div>
      </div>
      <p class="w3-wide">Data Science and Analytics</p>
      <div class="w3-white">
        <div class="w3-container w3-padding-small w3-center w3-aqua w3-opacity=0" style="width:80%">88%</div>
	  </div>
      <p class="w3-wide">Security and System Support</p>
      <div class="w3-white">
        <div class="w3-container w3-padding-small w3-center w3-pink" style="width:80%">90%</div>
      </div>
      <p><button class="w3-button w3-light-grey w3-padding-large w3-margin-top w3-margin-bottom">Download Brochure</button></p>
      <hr class="w3-opacity">

      <h4 class="w3-padding-16 w3-center" > Our Pricing</h4>
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <ul class="w3-ul w3-aqua w3-center  w3-hover-opacity w3-hover-off ">
            <li class="w3-black w3-xlarge w3-padding-32">JARKS Basic APPS</li>
            <li class="w3-padding-16">Web Design</li>
            <li class="w3-padding-16">Website Development</li>
            <li class="w3-padding-16">Data Analytics</li>
			 <li class="w3-padding-16">5GB Storage</li>
            <li class="w3-padding-16">Mail Support</li>
            <li class="w3-padding-16">
              <span class="w3-padding-16">Inquire for Quotation!</span>
            </li>
            <li class="w3-light-grey w3-padding-24">
              <button class="w3-button w3-black w3-padding-large">Starter Package</button>
            </li>
          </ul>
        </div>
        <div class="w3-half">
          <ul class="w3-ul w3-blue w3-center w3-hover-opacity w3-hover-off">
            <li class="w3-black w3-xlarge w3-padding-32">JARKS Pro APPS</li>
            <li class="w3-padding-16">Web Design</li>
			<li class="w3-padding-16">Website Development</li>
            <li class="w3-padding-16">Data Analytics</li>
            <li class="w3-padding-16">50GB Storage</li>
            <li class="w3-padding-16">Endless Support</li>
            <li class="w3-padding-16">
              <span class="w3-padding-16">Inquire for Quotation!</span>
            </li>
            <li class="w3-light-grey w3-padding-24">
              <button class="w3-button w3-black w3-padding-large">Complete Package</button>
            </li>
          </ul>
        </div>
      </div>
	  
    </div>
  </div>

  <!-- Contact section -->
  <div class="w3-container w3-yellow w3-padding-32 w3-padding-large" id="contact">
    <div class="w3-content" style="max-width:600px">
      <h4 class="w3-center"><b>Contact Us</b></h4><br>
      <p>Call us for quotations and other project inquiry!</p>
      <form action="/action_page.php" target="_blank">
        <div class="w3-section">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="checkbox" name="Inquiry Type" value="JARKS Basic APPS"> Starter Package</input> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  <input type="checkbox" name="Inquiry Type" value="JARKS Pro APPS"> Complete Package</input> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  <input type="checkbox" name="Inquiry Type" value="Other"> Other </input><br><br>
          <label>Name</label>
          <input class="w3-input w3-border" type="text" name="Name" placeholder="Fullname" required>
        </div>
        <div class="w3-section">
          <label>Email</label>
          <input class="w3-input w3-border" type="text" name="Email" placeholder="Your Email" required>
        </div>
        <div class="w3-section">
          <label>Message</label>
          <input class="w3-input w3-border" type="text" name="Message" required>
        </div>
        <button type="submit" class="w3-button w3-block w3-black w3-margin-bottom">Send</button>
      </form>
    </div>
  </div>

  <!-- Footer -->
  <footer class="w3-container w3-padding-32 w3-black w3-opacity">  
    <div class="w3-row-padding">
      <div class="w3-third">
        <h3>Our Office</h3><br>
        <p>Filinvest Tower, Bgy. Wack-Wack East Greenhils Edsa Ortigas, Pasig City</p>
		<p>jarks.Apps@gmail.com</p>
		<p>tel: 123 4567</p><br>
		<h3>JARKS APPS slogan here </h3><br><br><br><br><br><br>
		<!--<p>Send us <a href="url here">Feedback</a></p>-->
	  </div>

      <div class="w3-third">
        <h3>Our Partners</h3><br>
        <ul class="w3-ul">
          <li class="w3-padding-16 w3-hover-black">
            <!--<img src="/w3images/workshop.jpg" class="w3-left w3-margin-right" style="width:50px">-->
            <span class="w3-large">MFI Polythecnic Institute</span><br>
            <span>Pasig City, PH</span>
          </li>
          <li class="w3-padding-16 w3-hover-black">
            <!---<img src="/w3images/gondol.jpg" class="w3-left w3-margin-right" style="width:50px">--->
            <span class="w3-large">Against Plstic Pollution Society</span><br>
            <span>againstplasticpollutionsociety.site</span>
          </li> 
		  <li class="w3-padding-16 w3-hover-black">
            <!---<img src="/w3images/gondol.jpg" class="w3-left w3-margin-right" style="width:50px">--->
            <span class="w3-large">Brite Tech Innovations</span><br>
            <span>Manila, PH</span>
          </li> 
		  <li class="w3-padding-16 w3-hover-black">
            <!---<img src="/w3images/gondol.jpg" class="w3-left w3-margin-right" style="width:50px">--->
            <span class="w3-large">PayPal</span><br>
            <span>Nebraska, USA</span>
          </li> 
        </ul>
      </div>

      <div class="w3-third">
        <h3>Our Team</h3><br>
        <p>
          <span class="w3-tag w3-black w3-margin-bottom">Renz Reyes</span><br> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Co-Founder|Artistic Director|Web Developer</span> <br>
          <span class="w3-tag w3-black w3-margin-bottom">Kate Gomez</span><br> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Co-Founder|Analytics Project Manager|Web Developer</span> <br>
          <span class="w3-tag w3-black w3-margin-bottom">Anna Marzo</span><br> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Co-Founder|Web Design Manager| Web Developer</span> <br>
          <span class="w3-tag w3-black w3-margin-bottom">Sharlyne Co</span><br> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Co-Founcer|Admin Web Master|Web Developer</span> <br>	
          <span class="w3-tag w3-black w3-margin-bottom">Joan Sy</span><br> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Co-Founder|Systems Quality Analyst|Web Development</span> 
		</p>
	  </div>
    </div>
   </footer>
  
  <div class="w3-black w3-center w3-padding-24">All Rights Reserved 2018 <p class="glow"> <a href=http://localhost/gao_yixun/proj_apps/html/newsletter.html>JARKS APPS</p></div><br>
 
  
  
<!---FOOTER--->

			
<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

</script>

</body>
</html>
