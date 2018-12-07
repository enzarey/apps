<?php

				//blog viewer
				
				
					$conn = new mysqli("localhost", "root", "", "jarksgrp");
				 
						//MYSQL INSERTION
					$sqlSelect = "SELECT * FROM tbl_blogs ORDER BY content_id DESC";
							  
				$result = $conn->query($sqlSelect);
					if ($result->num_rows > 0) {
						
								while($row = $result->fetch_assoc()) {
									$content_id  =   $row['content_id'];
									$content_title  =   $row['content_title'];
									$contents  =   $row['contents'];
									 $date_input  =   $row['date_input'];
									$user_id  =   $row['user_id'];
									$photo_path  =   $row['photo_path'];
									
									
									echo "<p>";	
												echo "<h1>".$content_title."</h1><br>";
												echo "<br><img src='uploads/$photo_path' width='200px' height='200px'><br><br>";
												echo 	$contents;
									echo "</p>";
									echo "<br>";
								}
					
					}
 
?>