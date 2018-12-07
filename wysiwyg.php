<?php
    require('config.php');
	
				 

				if($_POST['btnSubmit']) {
					
							$articlecontent = $_POST['articlecontent'];
							//$contenttiele = "sample lang";
							$contenttiele = $_POST['contenttiele'];
							$user_id =  $_SESSION['user_id'] ; // dapat session ng user_id
							$photo_path = "";
							
						
							//FILE UPLOAD PROCESSING...........
						    $target_dir = "uploads/";
							$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
							$uploadOk = 1;
							$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
							// Check if image file is a actual image or fake image
						 
							$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
								if($check !== false) {
									//echo "File is an image - " . $check["mime"] . ".";
									$uploadOk = 1;
								} else {
									//echo "File is not an image.";
									$uploadOk = 0;
								}
						 
							// Check if file already exists
							if (file_exists($target_file)) {
								echo "Sorry, file already exists.";
								$uploadOk = 0;
							}
							// Check file size
							if ($_FILES["fileToUpload"]["size"] > 9540000) {
								echo "Sorry, your file is too large.";
								$uploadOk = 0;
							}
							// Allow certain file formats
							if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
							&& $imageFileType != "gif" ) {
								echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
								$uploadOk = 0;
							}
							// Check if $uploadOk is set to 0 by an error
							if ($uploadOk == 0) {
								echo "Sorry, your file was not uploaded.";
							// if everything is ok, try to upload file
							} else {
								if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
									//echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
										;;
									header("location:blog_.php");
								} else {
									//echo "Sorry, there was an error uploading your file.";
										;;
								}
							}
							//END OG FILE UPLOAD	 -------------------------------------------------			
						
							if($uploadOk == 1){
												$photo_path = $_FILES["fileToUpload"]["name"];
						
													//DATABASE INSERTION
													$conn = new mysqli("localhost", "1116579", "GOFORGOLD2018", "1116579db2");
													if ($conn->connect_error) { 
														die("Connection failed: " . $conn->connect_error);
													}else{
														//MYSQL INSERTION
													$strInsert = "INSERT INTO tbl_blogs(content_title,contents,user_id,photo_path) 
																												  VALUES('$contenttiele','$articlecontent','$user_id ','$photo_path')";
															  
													$insert = $conn->query($strInsert);
													//echo "<br>Your article has been uploaded!";
													$conn->close();
													
													
													}
							}//upload ok END
					}
	?>

<html>
<head>
<title>APPS: Write an Article</title>
<meta charset="UTF-8">

<link rel="stylesheet" href="blog/examples/css/site.css">
    <link rel="stylesheet" href="blog/src/richtext.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="blog/src/jquery.richtext.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

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
    background-image: url('images/blog_.jpg');
    min-height: 100%;
}

/* Second image (VISION) */
.bgimg-2 {
    background-image: url("images/blog_.jpg");
    min-height: 400px;
}

/* Third image (MISSION) */
.bgimg-3 {
    background-image: url("images/blog_.jpg");
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

<head>
   <script src='https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=6gyga8kzgrg4kgrukuss0nc47rj5cyanvim6jzg4483k9znb'>   
   <script>tinymce.init({ selector: #mytextarea });</script>

</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
	<a href="index_.php" class="w3-bar-item w3-button"><img src="images/APPSlogo-small.png"></a>
    <a href="index_.php" class="w3-bar-item w3-button">HOME</a>
    <a href="about_.php" class="w3-bar-item w3-button w3-hide-small">ABOUT</a>
    <a href="blog_.php" class="w3-bar-item w3-button w3-hide-small">BLOG</a>
	    <a href="actions.php" class="w3-bar-item w3-button w3-hide-small">GET INVOLVED</a>
    <a href="contact_.php" class="w3-bar-item w3-button w3-hide-small">CONTACT US</a>
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
	<a href="index_.php" class="w3-bar-item w3-button" onclick="toggleFunction()"><img src="images/APPSlogo-small.png"></a>
   <a href="index_.php" class="w3-bar-item w3-button" onclick="toggleFunction()">HOME</a>
    <a href="about._php" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
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

<!-- First Parallax Image with Logo Text -->
<div <!-- class="bgimg-1 w3-display-container w3-opacity-min" id="home" -->>
  <div class="w3-display-middle" style="white-space:nowrap;">
  <center><img src="images/APPSlogo.png"></center><br>
   <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">Against Plastic Pollution Society</span>
  </div>
</div>

<!-- Container WYSIWYG Editor -->
<div class="w3-content w3-container w3-padding-64" id="objectives">
<?php
echo "<div class='page-wrapper box-content'>";

echo "<h3 class='w3-center'>WRITE AN ARTICLE*</h3>";

			echo "<FORM name='writerko' method='POST'  enctype='multipart/form-data'>";
					echo"<center><span class='w3-large w3-text-gray'>Title:</span> &nbsp;<input type='text' style='width:800px' name='contenttiele' required></center>";
					echo "<textarea class='content' name='articlecontent' >";	
								echo "Type article here...";
					echo "</textarea>";
						 echo "<br>Select image to upload:**";
						echo "<br><input type='file' name='fileToUpload' id='fileToUpload'>";
						
						echo "<p align='right'><input type='submit' value='submit' name='btnSubmit' id='submit'></p><br>";
					
			echo "</FORM>";
			echo "<span class='w3-small w3-text-gray'>* Max 240 words, max 1,390 chars<br>";
			echo "** preferably .jpg format</span>";
					
echo "</div>";

echo "<script>
    $(document).ready(function() {
        $('.content').richText();
    });
</script>";

?>
 
 
  </div>
 

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey">Back to top</a><br>

<div class="w3-black w3-center w3-padding-24">All Rights Reserved 2018 <p class="glow"> <a href=http://jarksapps.ml>JARKS APPS</p></div><br>

</footer>
 


</body>
</html>
