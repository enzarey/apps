<?php



	function printMenu(){
		echo "<hr>";
			echo "<table align='center'>";
				echo "<tr>";
					//echo "<td><a href='index.php'>HOME</a></td>";
					//echo "<td>&nbsp;|&nbsp;</td>";
					//echo "<td><a href='login.php'>LOGIN</a></td>";
					//echo "<td>&nbsp;|&nbsp;</td>";
					//echo "<td><a href='register.php'>REGISTER</a></td>";
					//echo "<td>&nbsp;|&nbsp;</td>";
					//echo "<td><a href='viewaccounts.php'>VIEW ACCOUNTS</a></td>";
					
					if($_SESSION['user_type']==1){
					echo "<td>&nbsp;|&nbsp;</td>";
					echo "<td><a href='actions.php'>CLICK HERE</a></td>";
					}
				echo "</tr>";
			echo "</table>";
		echo "<hr>";	
	}
	
	//function printFooter(){
		?>
		<!--<html><p>
		asdfasdfasdfasdf
		asdfasdfasdfasdfasdfasfasdf
		asdfasdfsad</p>
		</HTML> --!>
		<?php
	//}
	
	//function calculatorKO($num1=0,$num2=0,$oper=0){
		//	$ans = 0;
		//	if($oper == 1){
			//	$ans = $num1 + $num2;
		//	}elseif($oper == 2){
			//	$ans = $num1 * $num2;
		//	}
	//	return $ans;
	//}
	


	
?>