<?php
	include('mylibfunc.php');
	session_start();
	error_reporting(E_ALL & ~E_NOTICE);
	
	if($_GET['logout'] == 1){
		$_SESSION['first_name']="";
		$_SESSION['last_name']="";
		//$_SESSION['user_type_id']="";
	}

?>
