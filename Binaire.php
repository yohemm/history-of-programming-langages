<!-- <?php 
	// require 'function.ph';
	// page(
	// 	'Le Binaire',
	// 	'<p>
	// 		Le système binaire est le langage machine crée par Gottfried Wilhem von Leibniz. <br><br>
	// 		Le binaire utilise la base 2, c’est-à-dire qu’il utilise seulement les chiffres 0 et 1.<br><br>
	// 		Il sert a représenter le fonctionnement de l’électronique numérique utilisé dans les ordinateurs. Il est donc utilisé par les langages de programmation de bas niveau ou haut niveau comme le <a href="C.php">C</a>.<br><br>
	// 	</p>',
	// 	'<script type="text/javascript" id="alert">
	// alert("Bravo tu a débloqué la page Binaire!");
	// </script>'
	// );
 ?> -->
 <!DOCTYPE html>
		<html>
		<head>
			<script type="text/javascript" id="alert">
				<?php 
				if (isset($_GET['Win'])) {
					if ($_GET['Win'] == 'true') {
						echo"alert('Bravo tu a débloqué la page Binaire!');";
					}
					else
					{
						header('location: index.php');
					}
				}
				else
				{
					header('location: index.php');
				}
			 ?>
			</script>
			<?php include ('includes/head.php'); ?>
		</head>
		<body>
			<?php include 'includes/header.php' ; ?>
			<h4 class='contentTitle'>Le Binaire</h4><br>
			<div id='content'>
				<div id='left_content'>
				<p>
					Le système binaire est le langage machine trouvé par Gottfried Wilhem von Leibniz. <br><br>
					Le binaire utilise la base 2, c’est-à-dire qu’il utilise seulement les chiffres 0 et 1.<br><br>
					Il sert à représenter le fonctionnement de l’électronique numérique utilisé dans les ordinateurs. Il est donc utilisé par les langages de programmation de bas niveau ou haut niveau comme le <a href="C.php">C</a>.<br><br>
				</p>
			</div>
				<div id="right_content">
					<img class="LImg" src="img/EasterEgg.jpg" width="200px">
					<br>
					<h6>égale à -18</h6>
					<p class="code">1110 1111</p>
				</div>
			</div>
			<?php include 'includes/footer.php' ;?></body>
		</html>