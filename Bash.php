<!-- <?php 
	// require 'function.php';
	// page(
	// 	'Le Bash',
	// 	'<p>Le Bash a été publié le 8 Juin 1989 par Brian Fox. <br><br>
	// 		Bash est l’acronyme de Bourne-Again shell, c’est un interpréteur en ligne de commande de type script. <br> <br>
	// 		« Bourne-Again » littéralement, « Bourne again » signifie « né de nouveau », ou « réincarné ». <br> <br>
	// 		Le premier mot de la ligne est interprété comme le nom de la commande, les autres mots en sont les paramètres ou option.</p>',
	// 	''
	// )
 ?> -->
 <!DOCTYPE html>
		<html>
		<head>
		<?php include ('includes/head.php'); ?>
		</head>
		<body>
			<?php include 'includes/header.php' ; ?>
				<h4 class='contentTitle'>Le Bash</h4><br>
				<div id='content'>
					<div id='left_content'>
					<p>Le Bash a été publié le 8 Juin 1989 par Brian Fox. <br><br>
			Bash est l’acronyme de Bourne-Again shell, c’est un interpréteur en ligne de commande de type script. <br> <br>
			« Bourne-Again » littéralement, « Bourne again » signifie « né de nouveau », ou « réincarné ». <br> <br>
			Le premier mot de la ligne est interprété comme le nom de la commande, les autres mots en sont les paramètres ou option.</p>
		</div>
			<div id="right_content">
				<img class="LImg" src="img/Bash.png" width="200px">
				<br>
				<h6>Affiche "Yohem et Renaud" à partir de "Yohem et renaud" </h6>
				<p class="code">name="Yohem et renaud" <br>
					echo ${name} <br>
					echo ${name/r/R} 
				</p>
			</div>
			</div>
			<?php include 'includes/footer.php' ;?></body>
		</html>