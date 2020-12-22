<!-- <?php 
	// require 'function.php';
	// page(
	// 	'Le jeu du plus ou moins',
	// 	'<form name="essai" id="MOL">
	// 			<label id="jeuTitle" >assembleur :</label><br><br>
	// 			<input type="number" class="selectNumber" cmin="1940" max="2000" value="1970" name="zone" onclick=""><br><br>
	// 			<!-- quand active la fonction trait -->
	// 			<a class="GButton" onclick="trait()">Valider</a>
	// 	</form>	',
	// 	'<script type="text/javascript">
	// 	var NB = "0";
	// 	function des{
	// 		if (event.keyCode == 13) {
	// 			event.keyCode = 0;
	// 			window.event.returnValue = false;
	// 		}
	// 	}
	// 	// fonction des vérification des resulta a= le resultat attendu b=l\'id de l\'indice c=Le titre a mettre
	// 	function Verify(a, b ,c) {
	// 		// si le resuktat est trop grande
	// 			if (a < document.essai.zone.value) {
	// 				alert(\'Trop grand!\');
	// 			}
	// 			// si il est trop petite
	// 			else if (a > document.essai.zone.value) {
	// 				alert(\'Trop petit!\');
	// 			}
	// 			// si c\'est just
	// 			else {
	// 				NB ++;
	// 				document.getElementById(b).textContent  = c;
	// 			}
	// 	}
	// 	//fonction qui trait les resulta
	// 	function trait() {
	// 			alert(\'appell la fonctio \');
	// 			var name = "jeuTitle", text, B;
	// 			// verification du niveau 
	// 			if (NB == "0") {
	// 			B = "1949";
	// 			text = "python :";
	// 			Verify(B,name, text);
	// 			} 
	// 			// verification du niveau 2
	// 			else if (NB == "1") {
	// 			B = "1991"
	// 			text= "Bash :";
	// 			Verify(B,name, text);
	// 			}
	// 			// verification du niveau 3
	// 			else if (NB == "2") {
	// 			B = "1989"
	// 			text= "C++ :";
	// 			Verify(B,name, text);
	// 			}
	// 			// verification du niveau 4
	// 			else if (NB == "3") {
	// 			B = "1983"
	// 			text= "PHP :";
	// 			Verify(B,name, text);
	// 			}
	// 			// verification du niveau 5
	// 			else if (NB == "4") {
	// 			B = "1994"
	// 			text= "Fortan :";
	// 			Verify(B,name, text);
	// 			}
	// 			// verification du niveau 6
	// 			else if (NB == "5") {
	// 			B = "1954"
	// 			text= "JavaScript :";
	// 			Verify(B,name, text);
	// 			}
	// 			// verification du niveau 7
	// 			else if (NB == "6") {
	// 			B = "1995"
	// 			text= "C :";
	// 			Verify(B,name, text);
	// 			}
	// 			// verification du niveau 8
	// 			else if (NB == "7") {
	// 			B = "1970"
	// 			text= "Fini";
	// 			Verify(B,name, text);
	// 			// quand tu a gagné
	// 			alert(\'redirection\');
	// 			document.location.href ="Binaire.php";
	// 			}else
	// 			{
	// 				// si il y a une erreur
	// 				NB = "0";
	// 			}
	// 		}
	// </script>'
	// );
 ?> -->
 <!DOCTYPE html>
		<html>
		<head>
			<script type="text/javascript">
		var NB = "0";
		// fonction des vérification des resulta a= le resultat attendu b=l\'id de l\'indice c=Le titre a mettre
		function Verify(a, b ,c) {
			// si le resuktat est trop grande
				if (a < document.MoreOrLess.zone.value) {
					alert('Trop grand!');
				}
				// si il est trop petite
				else if (a > document.MoreOrLess.zone.value) {
					alert('Trop petit!');
				}
				// si c\'est just
				else {
					NB ++;
					document.getElementById(b).textContent  = c;
					if (NB == 8)
					{		
						// quand tu a gagné
						document.location.href ="Binaire.php?Win=true";
					}
				}
		}
		//fonction qui trait les resulta
		function trait() {
				var name = "jeuTitle", text, B;
				// verification du niveau 
				if (NB == 0) {
				B = "1949";
				text = "python (2/8) :";
				Verify(B,name, text);
				} 
				// verification du niveau 2
				else if (NB == 1) {
				B = "1991"
				text= "Bash (3/8) :";
				Verify(B,name, text);
				}
				// verification du niveau 3
				else if (NB == 2) {
				B = "1989"
				text= "C++ (4/8) :";
				Verify(B,name, text);
				}
				// verification du niveau 4
				else if (NB == 3) {
				B = "1983"
				text= "PHP (5/8) :";
				Verify(B,name, text);
				}
				// verification du niveau 5
				else if (NB == 4) {
				B = "1994"
				text= "Fortan (6/8) :";
				Verify(B,name, text);
				}
				// verification du niveau 6
				else if (NB == 5) {
				B = "1954"
				text= "JavaScript (7/8) :";
				Verify(B,name, text);
				}
				// verification du niveau 7
				else if (NB == 6) {
				B = "1995"
				text= "C (8/8) :";
				Verify(B,name, text);
				}
				// verification du niveau 8
				else if (NB == 7) {
				B = "1970"
				text= "Fini";
				Verify(B,name, text);
				}else
				{
					// si il y a une erreur
					NB = 0;
				}
			}
	</script>
		<?php include ('includes/head.php'); ?>
		</head>
		<body>
			<?php include 'includes/header.php' ; ?>
				<h4 class='contentTitle'>Le jeu du plus ou moins</h4><br>
				<div id='content'>
					<form name="MoreOrLess" id="MOL">
				<label id="jeuTitle" >assembleur (1/8) :</label><br><br>
				<input type="number" class="selectNumber" min="1940" max="2000" value="1970" name="zone"><br><br>
				<!-- quand active la fonction trait -->
				<a class="GButton" onclick="trait()">Valider</a>
		</form>	
			</div>
			<?php include 'includes/footer.php' ;?></body>
		</html>