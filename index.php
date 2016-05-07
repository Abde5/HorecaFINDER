<!--
 *  Abdeselam El-Haman  et  Cédric Simar
 *  INFO-H-303 : Bases de données - Projet Horeca (partie 2) 
 * 
 *  PHP pour checker le login ou signup de l'user
 *	
 -->

 <?php session_start(); ?>

<!DOCTYPE html>
<html>
	<head>
		<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
		<title>HorecaFINDER</title>
		<meta charset="utf-8" />
	</head>

	<!-- Bootstrap CSS core -->
	<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="./bootstrap/css/dashboard.css" rel="stylesheet">
	

	<body>
		<?php
			// verification des login dans login.php
			include("./include/login.php");

			// ce code va include les menus etc -> à mettre dans chaque page
			include("./include/entete.php");
			include("./include/menus.php");
		?>

		<!-- Mettre jumbotron pour info initiale -->
		<div class="col-sm-5 col-sm-offset-2 col-md-10 col-md-offset-2 main">
			<div class="jumbotron">
				<h1>HorecaFINDER</h1> 
				<p>Cédric c'est à toi le bla bla, à toi de changer ça... ou on pourrait mettre la recherche direct?</p> 
			</div>
		</div>

		<!-- div extra pour le menu -->
		</div>


	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="./bootstrap/js/jquery-1.12.3.min.js"></script>
	<script src="./bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>
