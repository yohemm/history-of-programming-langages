<!-- <?php 
	// require 'function.php';
	// page(
	// 	'Le C++',
	// 	'<p>Le C++ a été publié en 1983 par Bjarne Soustrup, il peut être qualifié aussi bien comme un langage de haut ou bas niveau. <br><br>
	// 		Les deux plus(qui signifi +1 en C) suivant la lettre C signifie qu’il est plus avancé que le langage <a href="C.php">C</a> et sa comptabilité avec le <a href="C.php">C</a> en font un des langages de programmation les plus utilisés dans les applications où la performance est critique.<br><br>
	// 		Le C++ rajoute des nouvelles balises :<br><br>
	// 		-	Public pour l’accessibilité a n’importe quelle fonction.<br><br>
	// 		-	Private ne rend pas accessible.<br><br>
	// 		-	Protected il auras les mêmes restrictions que s’il était en privé mais il sera accessible par les classes filles (code a l’intérieur des deux balises.)</p>',
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
				<h4 class='contentTitle'>Le C++</h4><br>
				<div id='content'>
					<div id='left_content'>
					<p>Le C++ a été publié en 1983 par Bjarne Soustrup, il peut être qualifié aussi bien comme un langage de haut ou bas niveau. <br><br>
			Les deux plus (qui signifi +1 en C) suivant la lettre C signifie qu’il est plus avancé que le langage <a href="C.php">C</a> et sa comptabilité avec le <a href="C.php">C</a> en font un des langages de programmation les plus utilisés dans les applications où la performance est critique.<br><br>
			Le C++ rajoute des nouvelles balises :<br><br>
			-	Public pour l’accessibilité a n’importe quelle fonction.<br><br>
			-	Private ne rend pas accessible.<br><br>
			-	Protected il auras les mêmes restrictions que s’il était en privé mais il sera accessible par les classes filles (code a l’intérieur des deux balises.)</p>
		</div>
			<div id="right_content">
				<img class="LImg" src="img/C++.png" width="200px">
				<br>
				<h6>Affiche "Merci de nous mettre un 20/20 pour se project" :</h6>
				<p class="code">
					int main() {<br>
				    std::cout << "Merci de nous mettre un 20/20 pour se project";<br>
				    return 0;<br>
					}
				</p>
			</div>
			</div>
			<?php include 'includes/footer.php' ;?></body>
		</html>