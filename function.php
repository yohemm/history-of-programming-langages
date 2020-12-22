<?php 
	function page($title, $content,$JS){
		echo "<!DOCTYPE html>
		<html>
		<head>". $JS;
		include ('includes/head.php');
		"</head>
		<body>";
			include 'includes/header.php' ;
			echo"
				<h4 class='contentTitle'>".$title ."</h4><br>
				<div id='content'>
					".$content."
			</div>";
			 include 'includes/footer.php' ;
			 echo"</body>
		</html>" ;

	}
 ?>