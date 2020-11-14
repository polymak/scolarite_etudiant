<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<title>Application Web</title>
</head>
<body>
<div>
	<div id="banner">
	<h2 class="titleweb">Une Application web pour manipuler (Enregistrer, Modifier, Supprimer et Chercher) un ou plusieurs informations dans une base des données distante ou en ligne </h2>
	</div>
	<nav id="menu">
		<?php include("menu.php"); ?>
	</nav>
	<div id="interface_user">
	
	<?php

	switch ($_GET['page']) {

		case 'liste_etudiant':
			include('liste_etudiant.php');
			break;	

		case 'saisie_etudiant':
			include('saisie_etudiant.php');
			break;

		case 'chercher':
			include('chercher.php');
			break;

		default:
			include('page_accueil.php');
			break;
	}

	?>	
	</div>
</div>
<footer style="border: 5px solid black; margin-top: 10px; background-color: black; ">
	<h2 class="footer1">Programmé par Polycarpe Makombo</h2>
	<h3 class="footer1">Langage de programmation: HTML-CSS-PHP-MYSQL. Created 2020.</h3>
</footer>
</body>
</html>