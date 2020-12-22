<!DOCTYPE html>
<html>
<head>
	<?php include 'includes/head.php'; ?>
</head>
<body>
	<?php include 'includes/header.php'; ?>
	<div id="content">
		<?php if (isset($_GET['title'])) {

			if ($_GET['title'] == 'SystemDExploitation') {
				// inclu la def de systeme d'exploitation
				include 'includes/Definition/SystemDExploitation.php';
			}
			elseif ($_GET['title'] == 'LangageBasNiveau') {
				// inclu la def de language de bas niveau
				include 'includes/Definition/LangageBasNiveau.php';
			}
			elseif ($_GET['title'] == 'LangageHautNiveau') {
				// inclu la def de language de haut niveau
				include 'includes/Definition/LangageHautNiveau.php';
			}
			elseif ($_GET['title'] == 'Compilation') {
				// inclu la def de compilation
				include 'includes/Definition/Compilation.php';
			}
			else{
				// erreur revoi a l'acceuil
				header('location:index.php'); 
			}
		}
		else{
			// erreur revoi a l'acceuil
				header('location:index.php');
			} ?>
	</div>
	<?php include 'includes/footer.php'; ?>
</body>
</html>