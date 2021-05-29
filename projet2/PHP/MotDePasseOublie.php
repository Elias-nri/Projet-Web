<?php require 'header.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Mot de passe oublié</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="MiseEnPage1.css">
</head>
<body>
	<nav class="navbar navbar-expand-md">
		<a class="navbar-brand" href="Accueil.php">ECE MarketPlace</a>
		<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="recherche"><input type="text" class="form-control" placeholder="Rechercher"></div>
		<div class="collapse navbar-collapse" id="main-navigation">
			<ul class="navbar-nav">
				<li class="nav-item"><a class="nav-link" href="Accueil.php">Accueil</a></li>
				<li class="nav-item"><a class="nav-link" href="Parcourir.php">Parcourir</a></li>
				<li class="nav-item"><a class="nav-link" href="Notifications.php">Notifications</a></li>
				<li class="nav-item"><a class="nav-link" href="Compte.php">Mon compte</a></li>
				<li class="nav-item"><a class="nav-link" href="Panier.php"><img src="Img/panier.jpg" alt="Panier" width="30 px"></a></li>
			</ul>
		</div>
	</nav>
	<section class="page-header header container-fluid">
		<br>
		<form>
			<div class="Compte">
				<h2>Réinitialisez votre mot de passe<h2>
				<p>
				<label class="labelCol" for="myEmail">Pseudo ou E-mail: </label> <br>
				<input type="text" class="myConnection" name="myEmail" id="myEmail" />
				<br><br>
				<label class="labelCol" for="myMDP">Mot de passe: </label> <br>
				<input type="password" class="myConnection" name="myMDP" id="myMDP" /> 
				<br><br> 
				<label class="labelCol" for="myMDP">Confirmé le mot de passe: </label> <br>
				<input type="password" class="myConnection" name="myMDP" id="myMDP" />
				<br><br>
				<input type="submit" class="Bouton1" value="Réinitialiser" />
		    </div>
		</form>
		<br>
	</section>

	<?php require 'footer.php'; ?>