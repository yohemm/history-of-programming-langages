<!-- <?php 
	// require 'function.php';
	// page(
	// 	'Le C',
	// 	'<p>le C est un langage de programmation qui est proche d’un <a href="definition.php?title=LangageBasNiveau">langage de bas niveau</a>.<br><br>

	// 		Il a été inventé au début des année 1970 par Dennis Ritchie et Ken Thompson dans le but d’écrire le système d’exploitation UNIX, le <a href="definition.php?title=SystemDExploitation">système d’exploitation</a> de LINUX. Les premières versions de ce langage s’appeler B puis une fois le langage bien abouti, vers 1989 les créateurs ont décidé de changer le nom pour C dans le but de marquer la différence.<br><br>

	// 		Il est encore énormément utilisé de nos jours, bien que beaucoup de nouveau langages plus modernes se sont inspirés de lui comme le <a href="C++.php">C++</a>, <a href="JS.php">Javascript</a>, <a href="PHP.php">PHP</a> qui ont une syntaxe similaire au C.<br><br>

	// 		Il est notamment utilisé pour le <a href="definition.php?title=Compilation">compilateur</a> de langage plus moderne et les <a href="definition.php?title=SystemDExploitation">systèmes d’exploitation</a> comme celui de Windows ou Linux qui sont encore écrit en C.</p>',
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
				<h4 class='contentTitle'>Le C</h4><br>
				<div id='content'>
					<div id='left_content'>
					<p>Le C est un langage de programmation qui est proche d’un <a href="definition.php?title=LangageBasNiveau">langage de bas niveau</a>.<br><br>

			Il a été inventé au début des années 1970 par Dennis Ritchie et Ken Thompson dans le but d’écrire le système d’exploitation UNIX, le <a href="definition.php?title=SystemDExploitation">système d’exploitation</a> de LINUX. Un des premier noms du langage est B mais vers 1989 les créateurs ont décidé de changer le nom pour C dans le but de marquer la différence.<br><br>

			Il est encore énormément utilisé de nos jours, bien que beaucoup de nouveau langages plus modernes se sont inspirés de lui comme le <a href="C++.php">C++</a>, <a href="JS.php">Javascript</a>, <a href="PHP.php">PHP</a> qui ont une syntaxe similaire au C.<br><br>

			Il est notamment utilisé pour le <a href="definition.php?title=Compilation">compilateur</a> de langage plus moderne et les <a href="definition.php?title=SystemDExploitation">systèmes d’exploitation</a> comme celui de Windows ou Linux qui sont encore écrit en C.</p>
		</div>
			<div id="right_content">
				<img class="LImg" src="img/C.png" width="200px">
				<br>
				<h6>Moyenne de 3 nombres demandé :</h6>
				<p class="code">
					int main() <br>
					{ <br>
					    int a,b,c; <br>
					    float moy; <br>
					    printf("Donnez 3 entiers:\n"); <br>
					    scanf("%d%d%d",&a,&b,&c); <br>
					    moy=(float)(a+b+c)/3; <br>
					    printf("La moyenne de ces trois entiers est: %.2f\n",moy); <br>
					    system("pause"); <br>
					    return 0; <br>
					}
				</p>
			</div>
			</div>
			<?php include 'includes/footer.php' ;?></body>
		</html>