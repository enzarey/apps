<?php
	session_start();
	
	
	if($_SESSION['USERID'] == ""){
		echo "YOU MUST LOGIN FIRST";
	}else{
		echo "YOU ARE ALLOWED";
	}
	 
	
	
	
	
?>