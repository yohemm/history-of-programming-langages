<!-- <?php 
	// require 'function.php';
	// page(
	// 	'Le Python',
	// 	'<p>En 1991 fût sorti la première version de python par le programmateur Guido van Rossum. <br><br>
	// 		Etant Fan de la série télévisée Monty Python Flying Circus, il décide de baptiser ce projet Python.<br><br>
	// 		Le langage python est inspiré par Modula 3 et du <a href="C.php">langage C</a>, Python est un <a href="definition.php?title=LangageHautNiveau">langage de très haut niveau</a>.<br><br>
	// 		Python a été crée dans le but d’être un langage visible, est épuré, il permet de programmer dans un style fonctionnel.<br><br>
	// 		Les blocs de code sont simplifiés sans accolades à l\'inverse des <a href="C.php">langages C</a> et <a href="C++.php">C++</a>.<br><br>
	// 		Plusieurs entreprise ou organismes mentionnent sur leur site officiel qu’ils utilisent Python :<br><br>
	// 		-	Google<br><br>
	// 		-	Industrial Light & Magic (société d’effet spéciaux reconnu dans le monde)<br><br>
	// 		-	NASA<br><br>
	// 		-	LibreOffice / OpenOffice</p>',
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
				<h4 class='contentTitle'>Le Python</h4><br>
				<div id='content'>
					<div id='left_content'>
					<p>En 1991 fût sorti la première version de python par le programmateur Guido van Rossum. <br><br>
			Etant Fan de la série télévisée Monty Python Flying Circus, il décide de baptiser ce projet Python.<br><br>
			Le langage python est inspiré par Modula 3 et du <a href="C.php">langage C</a>, Python est un <a href="definition.php?title=LangageHautNiveau">langage de très haut niveau</a>.<br><br>
			Python a été crée dans le but d’être un langage visible, est épuré, il permet de programmer dans un style fonctionnel.<br><br>
			Les blocs de code sont simplifiés sans accolades à l'inverse des <a href="C.php">langages C</a> et <a href="C++.php">C++</a>.<br><br>
			Plusieurs entreprises ou organismes mentionnent sur leur site officiel qu’ils utilisent Python :<br><br>
			-	Google<br><br>
			-	Industrial Light & Magic (société d’effet spéciaux reconnu dans le monde)<br><br>
			-	NASA<br><br>
			-	LibreOffice / OpenOffice</p>
		</div>
			<div id="right_content">
				<img class="LImg" src="img/python.png" width="200px">
				<br>
				<h6>Un dés truqué :</h6>
				<p class="code">
					from random import * <br>
					print(randint(1,6)) <br>
					a = random() <br>
					print(a) <br>
					if a<0.1: <br>
					    a=1 <br>
					elif a<0.25: <br>
					    a=2 <br>
					elif a<0.4: <br>
					    a=3 <br>
					elif a<0.55: <br>
					    a=4 <br>
					elif a<0.7: <br>
					    a=5 <br>
					else: <br>
					    a=6 <br>
					print(a)
				</p>
			</div>
			</div>
			<?php include 'includes/footer.php' ;?></body>
		</html>