<!-- <?php 
	// require 'function.php';
	// page(
	// 	'Le Fortran',
	// 	'<p>En 1954 Fortran a été publié par John Backus. Fortran est le plus vieux langage de programmation de haut niveau existant, sont utilité première est pour les calculs scientifique. Sont noms vient de la société dont fait partie son créateur : Preliminary Report Spécifications for the IBM Mathematical <strong>FOR</strong>mula <strong>TRAN</strong>slating Systéme soit FORTRAN. <br><br>
	// 		Avant le Fortran 90, le code commençais à partir de la 7ème colonne et ne devais pas dépasser la 72ème colonne et les espaces dans le code n\'étais pas obligatoire.</p>',
	// 	''
	// );
 ?> -->
 <!DOCTYPE html>
		<html>
		<head>
		<?php include ('includes/head.php'); ?>
		</head>
		<body>
			<?php include 'includes/header.php' ; ?>
				<h4 class='contentTitle'>Le Fortran</h4><br>
				<div id='content'>
					<div id='left_content'>
					<p>En 1954 Fortran a été publié par John Backus. Fortran est le plus vieux langage de programmation de haut niveau existant, sont utilité première est pour les calculs scientifique. Sont noms vient de la société dont fait partie son créateur : Preliminary Report Spécifications for the IBM Mathematical <strong>FOR</strong>mula <strong>TRAN</strong>slating Systéme soit FORTRAN. <br><br>
			Avant le Fortran 90, le code commençais à partir de la 7ème colonne et ne devais pas dépasser la 72ème colonne et les espaces dans le code n'étais pas obligatoire.</p>
		</div>
			<div id="right_content">
				<img class="LImg" src="img/Fortran.png" width="200px">
				<br>
				<h6>Déclare 3 variables :</h6>
				<p class="code">PROGRAM initialisation <br>
					INTEGER:: debut=100 <br>
					REAL:: valeur=76.3 <br>
					LOGICAL:: drapeau=.TRUE <br>
					.... <br>
					END PROGRAM initialisation
				</p>
			</div>
			</div>
			<?php include 'includes/footer.php' ;?></body>
		</html>