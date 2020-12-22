<!DOCTYPE html>
<html>
<head>
	<?php include 'includes/head.php'; ?>
</head>
<body>
	<?php include 'includes/header.php'; ?>
	<div id="content">
		<h4 class="contentTitle">Le Quiz</h4><br>
		<div class="content">
			<?php 
			if (isset($_GET['NB']) && isset($_GET['SC'])) {
				if ($_GET['SC'] > 5) {
					//revoi a l'acceuil si il y a une erreur ou une triche *
					header('location: QCM.php');
				}
				if ($_GET['NB'] == 0) {
					//question 1
					include 'includes/Quiz/Question1.php';
				}
				// question 2
				else if ($_GET['NB'] == 1) {
					include 'includes/Quiz/Question2.php';
				}
				// question 3
				else if ($_GET['NB'] == 2) {
					include 'includes/Quiz/Question3.php';
				}
				// question 4
				else if ($_GET['NB'] == 3) {
					include 'includes/Quiz/Question4.php';
				}
				// question 5
				else if ($_GET['NB'] == 4) {
					include 'includes/Quiz/Question5.php';
				}
				// quand tu a juste
				else if ($_GET['NB'] == 5) {
					if ($_GET['SC'] == 5) {
					header('location: Binaire.php?Win=true');
					}
					else{
						// quand il y a des erreurs
						include 'includes/Quiz/error.php';
					}
				}
				else{
					header('location: QCM.php');
				}
			}
			//si les variable sont pas dans transmise
			else{
				// revoi a la permier question
				header('location: QCM.php?NB=0&SC=0');
			} ?>
		</div>
	</div>
	<?php include 'includes/footer.php'; ?>
</body>
</html>