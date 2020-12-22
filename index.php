<!-- <?php 
// 	require 'function.php';
// 	page(
// 		'Information',
// 		' <div id="left_content">
//  <p>Notre site internet est basé sur deux thème principale : les algorithmes et les langages de programmation. Nous avons décidé de mettre comme style un style simple avec 3 couleurs principales l’orange le bleu et le blanc. Nous avons eu comme règles de projet :<br>
// 	-utilisé les flexbox.<br>
// 	-coder un <a href="MoreOrLess.php">jeu</a> en javascript.<br>
// 	-utilisé HTML5 et CSS3.<br>
// 	-faire un <a href="QCM.php">QCM</a>.<br>
// 	-mettre des animation / transition.<br>
// 	-avoir une apparence moderne.<br>
// 	-et respecté les règles du responsive design. <br>
// 	Les créateurs de ce site sont Yohem Vaxelaire et Renaud Toussaint. <br>
// 	Nous avons cherché les information au confins du web et parmi celles-ci nous avons sellectioné les meilleurs ! Les sûres ! Les plus précises ! Les plus valorisantes !</p>
// </div>
// <div id="right_content">
// 	<img src="img/Logo_NSI.ico" sizes="5%">
// </div>',
// 		''
	// );
 ?> -->
 <!DOCTYPE html>
		<html>
		<head>
		<?php include ('includes/head.php'); ?>
		</head>
		<body>
			<?php include 'includes/header.php' ; ?>
				<h4 class='contentTitle'>Informations</h4><br>
				<div id='content'>
					<div id="left_content">
 <p>Notre site internet est basé sur deux thème principale : les algorithmes et les langages de programmation. Nous avons eu comme règles de projet :<br>
	-utilisé les flexbox.<br>
	-coder un <a href="MoreOrLess.php">jeu</a> en javascript.<br>
	-utilisé HTML5 et CSS3.<br>
	-faire un <a href="QCM.php">QCM</a>.<br>
	-mettre des animations / transitions.<br>
	-avoir une apparence moderne.<br>
	-et respecté les règles du responsive design. <br>
	Les créateurs de ce site sont Yohem Vaxelaire et Renaud Toussaint. <br>
	Nous avons cherché les information au confins du web et parmi celles-ci nous avons sellectioné les meilleurs ! Les sûres ! Les plus précises ! Les plus valorisantes !</p>
</div>
<div id="right_content">
	<img class="LImg" src="img/NSI.ico" width="200px">
	<h6>Définition :</h6>
	<a href="definition.php?title=Compilation">- La Compilation</a><br>
	<a href="definition.php?title=LangageHautNiveau">- Langage de Haut Niveau</a><br>
	<a href="definition.php?title=LangageBasNiveau">- Langage de Bas Niveau</a><br>
	<a href="definition.php?title=SystemDExploitation">- Systéme D'exploitation</a><br>
</div>
			</div>
			<?php include 'includes/footer.php' ;?></body>
		</html>