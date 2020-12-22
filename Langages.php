<!-- <?php 
// 	require 'function.php';
// 	page(
// 		'Liste des Langages présentés',
// 		'<div id="Liste">
// 			<p>trier par:</p>
// 			<!-- le trieur -->
// 			<form method="GET" action="langages.html">
// 				<select class="selector" name="order" onchange="updated(this)">
// 					<option class="selected" value="date">Dates de création</option>
// 					<option class="selected" value="alpha">Ordres alphabétique</option>
// 					<option class="selected" value="types">Languages de haut vers bas niveau</option>i
// 				</select> <br> <br>
// 			</form>
// 			<ul id="ulGButton">
// 				<li class="liGButton">
// 					<a href="Assembleur.php" id="1" class="GButton">Assembleur</a>
// 				</li><br>
// 				<li class="liGButton">
// 					<a href="Fortran.php" id="2" class="GButton">Fortran</a>
// 				</li><br>
// 				<li class="liGButton">
// 					<a href="C.php" id="3" class="GButton">C</a>
// 				</li><br>
// 				<li class="liGButton">
// 					<a href="C++.php" id="4" class="GButton">C++</a>
// 				</li><br>
// 				<li class="liGButton">
// 					<a href="Bash.php" id="5" class="GButton">Bash</a>
// 				</li><br>
// 				<li class="liGButton">
// 					<a href="Python.php" id="6" class="GButton">Python</a>
// 				</li><br>
// 				<li class="liGButton">
// 					<a href="PHP.php" id="7" class="GButton">PHP</a>
// 				</li><br>
// 				<li class="liGButton">
// 					<a href="JS.php" id="8" class="GButton">JavaScript</a>
// 				</li><br>
// 			</ul>
// 		</div>',
// 		'<script type="text/javascript">
// 		function changeOrder(a,b,c)
// 		{
// 			// change l\'odre a=l\'id du lien a change b=le titre c=le liens
//     			document.getElementById(a).innerHTML= b;
//     			document.getElementById(a).href= c+".php";
// 		}
// 		function updated(element)
// {	
// 			// idx = valeur du trieur selectionner
//     		var idx=element.selectedIndex;
//     		var ass= \'Assembleur\', cpp = \'C++:\', c = \'C\', ft = \'Fortran\', php = \'PHP\', py = \'Python\', ba = \'Bash\', js = \'JavaScript\';
//     		// quand dates des creation est selectionner
//     		if (idx == 0) {	
//     			changeOrder("1",ass,ass);

//     			changeOrder("2",ft,ft);

//     			changeOrder("3",c,c);

//     			changeOrder("4",cpp,cpp);

//     			changeOrder("5",ba,ba);

//     			changeOrder("6",py,py);

//     			changeOrder("7",php,php);

//     			changeOrder("8",js,"JS");
//     			// quand ordre alphabetique est selectionner
//     		}else if (idx == 1) {
//     			changeOrder("1",ass,ass);

//     			changeOrder("2",ba,ba);

//     			changeOrder("3",c,c);

//     			changeOrder("4",cpp,cpp);

//     			changeOrder("5",ft,ft);

//     			changeOrder("6",js,"JS");

//     			changeOrder("7",php,php);

//     			changeOrder("8",py,py);
//     			// quand niveau de language est selectionner
//     		}else{
//     			changeOrder("1",py,py);

//     			changeOrder("2",js,"JS");

//     			changeOrder("3",php,php);

//     			changeOrder("4",ft,ft);

//     			changeOrder("5",ba,ba);

//     			changeOrder("6",cpp,cpp);

//     			changeOrder("7",c,c);

//     			changeOrder("8",ass,ass);
    			
//     		}
//  }
// 	</script>'
	// );
 ?> -->
 <!DOCTYPE html>
		<html>
		<head>
			<script type="text/javascript">
		function changeOrder(a,b,c)
		{
			// change l\'odre a=l\'id du lien a change b=le titre c=le liens
    			document.getElementById(a).innerHTML= b;
    			document.getElementById(a).href= c+".php";
		}
		function updated(element)
{	
			// idx = valeur du trieur selectionner
    		var idx=element.selectedIndex;
    		var ass= 'Assembleur', cpp = 'C++:', c = 'C', ft = 'Fortran', php = 'PHP', py = 'Python', ba = 'Bash', js = 'JavaScript';
    		// quand dates des creation est selectionner
    		if (idx == 0) {	
    			changeOrder("1",ass,ass);

    			changeOrder("2",ft,ft);

    			changeOrder("3",c,c);

    			changeOrder("4",cpp,cpp);

    			changeOrder("5",ba,ba);

    			changeOrder("6",py,py);

    			changeOrder("7",php,php);

    			changeOrder("8",js,"JS");
    			// quand ordre alphabetique est selectionner
    		}else if (idx == 1) {
    			changeOrder("1",ass,ass);

    			changeOrder("2",ba,ba);

    			changeOrder("3",c,c);

    			changeOrder("4",cpp,cpp);

    			changeOrder("5",ft,ft);

    			changeOrder("6",js,"JS");

    			changeOrder("7",php,php);

    			changeOrder("8",py,py);
    			// quand niveau de language est selectionner
    		}else{
    			changeOrder("1",py,py);

    			changeOrder("2",js,"JS");

    			changeOrder("3",php,php);

    			changeOrder("4",ft,ft);

    			changeOrder("5",ba,ba);

    			changeOrder("6",cpp,cpp);

    			changeOrder("7",c,c);

    			changeOrder("8",ass,ass);
    			
    		}
 }
	</script>
		<?php include ('includes/head.php'); ?>
		</head>
		<body>
			<?php include 'includes/header.php' ; ?>
				<h4 class='contentTitle'>Liste des Langages présentés</h4><br>
				<div id='content'>
					<div id="Liste">
			<p>trier par:</p>
			<!-- le trieur -->
			<form method="GET" action="langages.html">
				<select class="selector" name="order" onchange="updated(this)">
					<option class="selected" value="date">Dates de création</option>
					<option class="selected" value="alpha">Ordres alphabétique</option>
					<option class="selected" value="types">Languages de haut vers bas niveau</option>i
				</select> <br> <br>
			</form>
			<ul id="ulGButton">
				<li class="liGButton">
					<a href="Assembleur.php" id="1" class="GButton">Assembleur</a>
				</li><br>
				<li class="liGButton">
					<a href="Fortran.php" id="2" class="GButton">Fortran</a>
				</li><br>
				<li class="liGButton">
					<a href="C.php" id="3" class="GButton">C</a>
				</li><br>
				<li class="liGButton">
					<a href="C++.php" id="4" class="GButton">C++</a>
				</li><br>
				<li class="liGButton">
					<a href="Bash.php" id="5" class="GButton">Bash</a>
				</li><br>
				<li class="liGButton">
					<a href="Python.php" id="6" class="GButton">Python</a>
				</li><br>
				<li class="liGButton">
					<a href="PHP.php" id="7" class="GButton">PHP</a>
				</li><br>
				<li class="liGButton">
					<a href="JS.php" id="8" class="GButton">JavaScript</a>
				</li><br>
			</ul>
		</div>
			</div>
			<?php include 'includes/footer.php' ;?></body>
		</html>