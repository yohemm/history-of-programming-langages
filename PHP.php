<!-- <?php 
	// require 'function.php';
	// page(
	// 	'Le PHP',
	// 	'<p>Le PHP est un <a href="definition.php?title=LangageHautNiveau">langage de haut niveau</a> publié en 1994 par El Roubio qui s’est inspiré de la ressemblance des lettres PHP avec un éléphant et du fait que deux des lettres du langage soient déjà présentes, a permis de crée le néologisme éléPHPant. <br><br>
	// 		Le PHP est un langage libre tout le monde peut l’utiliser gratuitement et prés de 80% des sites web utilisent se langage sous différente version. <br><br>
	// 		Le PHP est à la base un langage interprété, ce qui est au détriment de la vitesse d’exécution du code. Sa forte popularité associée à son utilisation sur des sites Web à très fort trafic comme exemple si dessus, ainsi que des gestions de base de données. <br><br>
	// 		-	Yahoo<br><br>
	// 		-	Facebook</p>',
	// 	''
	// );
 ?> -->
 <!DOCTYPE html>
		<html>
		<head
		<?php include ('includes/head.php'); ?>
		</head>
		<body>
			<?php include 'includes/header.php' ; ?>
				<h4 class='contentTitle'>Le PHP</h4><br>
				<div id='content'>
					<div id='left_content'>
					<p>Le PHP est un <a href="definition.php?title=LangageHautNiveau">langage de haut niveau</a> publié en 1994 par El Roubio qui s’est inspiré de la ressemblance des lettres PHP avec un éléphant et du fait que deux des lettres du langage soient déjà présentes, a permis de crée le néologisme éléPHPant. <br><br>
			Le PHP est un langage libre tout le monde peut l’utiliser gratuitement et prés de 80% des sites web utilisent se langage sous différente version. <br><br>
			Le PHP est à la base un langage interprété, ce qui est au détriment de la vitesse d’exécution du code. Sa forte popularité associée à son utilisation sur des sites Web à très fort trafic comme exemple si dessus, ainsi que des gestions de base de données. <br><br>
			-	Yahoo<br><br>
			-	Facebook</p>
		</div>
			<div id="right_content">
				<img class="LImg" src="img/PHP.png" width="200px">
				<br>
				<h6>Change les questions en fonction du niveau(Extrait du code du QCM) :</h6>
				<p class="code"> 
			if (isset($_GET['NB']) && isset($_GET['SC'])) { <br>
				if ($_GET['SC'] > 5) { <br>
					header('location: QCM.php'); <br>
				} <br>
				if ($_GET['NB'] == 0) { <br>
					//question 1 <br>
					include 'includes/Quiz/Question1.php'; <br>
				} <br>
				// question 2 <br>
				else if ($_GET['NB'] == 1) { <br>
					include 'includes/Quiz/Question2.php'; <br>
				}
			</p>			
			</div>
			</div>
			<?php include 'includes/footer.php' ;?></body>
		</html>