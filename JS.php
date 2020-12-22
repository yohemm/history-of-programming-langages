<!-- <?php 
	// require 'function.php';
	// page(
	// 	'Le JavaScript',
	// 	'<p>Le javascript a été créé en mai 1995 par Brendan Eich en seulement 10 jours. <br><br>
	// 		C’est un langage de programmation de haut niveau. <br><br>
	// 		Il est souvent combiné avec HTML et le CSS pour des pages web. <br><br>
	// 		Il ne faut pas confondre java et javascript ! <br><br>
	// 		Le langage javascript (JS) est souvent utilisé dans la plupart des site web ou même navigateur web comme : Mozilla. Il apporte une touche interactive ou dynamique a un applicatif.</p>',
	// 	''
	// );
 ?> -->
 <!DOCTYPE html>
		<html>
		<head>
		<?php include ('includes/head.php'); ?>
		<script type="text/javascript">
			started = false;
			function trait(){
				a= "2020";
				if (a < document.MoreOrLess.zone.value) {
							alert('Trop grand!');
							document.getElementById('jeuTitle').textContent  = "Réessaye";
							document.getElementById('jeuTitle').style.color = 'red';
				} 
				// si il est trop petite
				else if (a > document.MoreOrLess.zone.value) {
					alert('Trop petit!');
					document.getElementById('jeuTitle').textContent  = "Réessaye";
					document.getElementById('jeuTitle').style.color = 'red';
				} 
				// si c\'est just
				else { 
					document.getElementById('jeuTitle').textContent  = "Bravo, tu à juste";
					document.getElementById('jeuTitle').style.color = 'green';
				}
			}
			function Hide(btn){
				var content = document.getElementById("MOLJS");
				if (content.style.display == 'none' || started == false) {
					content.style.display = 'block';
					document.getElementById('jeuTitle').textContent = "⇓⇓⇓⇓⇓⇓";
					document.getElementById('jeuTitle').style.color = 'black';
					btn.value = "Cacher";
					started = true;
				}
				else
				{
					content.style.display = 'none';
					btn.value = 'Tester';
				}
			}
		</script>
		</head>
		<body>
			<?php include 'includes/header.php' ; ?>
				<h4 class='contentTitle'>Le JavaScript</h4><br>
				<div id='content'>
					<div id='left_content'>
					<p>Le javascript a été créé en mai 1995 par Brendan Eich en seulement 10 jours. <br><br>
			C’est un langage de programmation de haut niveau. <br><br>
			Il est souvent combiné avec HTML et le CSS pour des pages web. <br><br>
			Il ne faut pas confondre java et javascript ! <br><br>
			Le langage javascript (JS) est souvent utilisé dans la plupart des sites web ou même navigateur web comme : Mozilla. Il apporte une touche interactive ou dynamique à un applicatif.</p>
		</div>
			<div id="right_content">
				<img class="LImg" src="img/JS.png" width="200px">
				<br>
				<h6>Jeu du plus ou moins</h6>
				<input type="button" class="GButton" name="testor" value="Tester" onclick="Hide(this)">
				<form name="MoreOrLess" id="MOLJS" class="disable">
					<label id="jeuTitle" >&dArr;&dArr;&dArr;&dArr;&dArr;&dArr;</label><br><br>
					<input type="number" class="selectNumber" min="2000" max="2040" value="2020" name="zone" onclick=""><br><br>
					<!-- quand active la fonction trait -->
					<a class="GButton" id="Test" onclick="trait()" >Valider</a>
				</form>	
				<p class="code">
					a= "2020" <br>
		if (a < document.essai.zone.value) { <br>
					alert('Trop grand!'); <br>
				} <br>
				// si il est trop petite <br>
				else if (a > document.essai.zone.value) { <br>
					alert('Trop petit!'); <br>
				} <br>
				// si c\'est just <br>
				else { <br>
					NB ++; <br>
					document.getElementById("l'id de la balise").textContent  = "Bravo, tu à juste"; <br>
				}
			</p>
			</div>
			</div>
			<?php include 'includes/footer.php' ;?></body>
		</html>