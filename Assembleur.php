<!-- <?php 
	// require 'function.php';
	// page(
	// 	'L\'Assembleur/Langages machines',
	// 	"<div id='left_content'>
	// 	<p>L’assembleur, autrement appeler langages machines ou d'assemblages, est le <a href=\"definition.php?title=LangageBasNiveau\">langage de plus bas niveau</a> que l’homme puisse lire, il est également le seul qu’un processeur puisse exécuter directement. Il est un des langages les plus rapides car la <a href=\"definition.php?title=Compilation\">Compilation</a> est extrêmement rapide.<br><br>

	// 		Il a été créé par Nathaniel Rochester pour l’IBM 701 en 1949, cet ordinateur était le premier ordinateur commercialisé de IBM. La plus pars de <a href=\"definition.php?title=SystemDExploitation\">système d’exploitation</a> créé jusqu’aux année 60 ont été écrits en assembleur.  A l’apparition des micro-ordinateurs le langages machines a été de nouveau tendance suite a la capacité réduite de ses structures.<br><br></div>

	// 		Il existe maintenant le Macro-Assembleur, qui a comme particularité de rendre plus commun et moins fastidieux le code en assembleur (comme l’assembleur de Microsoft MASM qui gèrent le macros).</p>
	// 		<div id=\"right_content\">
	// 			<img src=\"img/Logo_NSI.ico\" sizes=\"5%\">
	// 		</div>",
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
				<h4 class='contentTitle'>L'Assembleur/Langage machine</h4><br>
				<div id='content'>
					<div id='left_content'>
		<p>L’assembleur, autrement appelé langage machine ou d'assemblage, est le <a href="definition.php?title=LangageBasNiveau">langage de plus bas niveau</a> que l’Homme puisse lire, il est également le seul qu’un processeur puisse exécuter directement. Il est un des langages les plus rapides car la <a href="definition.php?title=Compilation">Compilation</a> est extrêmement rapide.<br><br>

			Il a été créé par Nathaniel Rochester pour l’IBM 701 en 1949, cet ordinateur était le premier ordinateur commercialisé de IBM. La plus pars de <a href="definition.php?title=SystemDExploitation">système d’exploitation</a> créé jusqu’aux année 60 ont été écrits en assembleur.  A l’apparition des micro-ordinateurs le langages machines a été de nouveau tendance suite à la capacité réduite de ses structures.<br><br>

			Il existe maintenant le Macro-Assembleur, qui a comme particularité de rendre plus commun et moins fastidieux le code en assembleur (comme l’assembleur de Microsoft MASM qui gèrent le macros).</p>
			</div>
			<div id="right_content">
				<h6>Affiche "Le meilleur projet de NSI" :</h6>
				<p class="code">str:<br>
					 .ascii "Le meilleur projet de NSI\n"<br>
					 .global _start <br><br>

					_start:<br>
					movl $4, %eax <br>
					movl $1, %ebx <br>
					movl $str, %ecx <br>
					movl $8, %edx <br>
					int $0x80 <br>
					movl $1, %eax <br>
					movl $0, %ebx <br>
					int $0x80<br><br>

					;Compilation: <br>
					;as code.s -o code.o <br>
					;ld code.o -o code<br><br>

					;Execution: <br>
					;./code</p>
			</div>
			</div>
			<?php include 'includes/footer.php' ;?></body>
		</html>