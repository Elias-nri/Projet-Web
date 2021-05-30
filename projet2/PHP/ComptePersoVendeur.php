<?php require 'header.php'; ?>


<?php
require_once 'AuthentificationVendeur.php' ;
forcer_connection();
?>

<!DOCTYPE html>
<html>

<head>
	<title>Compte Vendeur</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="MiseEnPage1.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
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
				<li class="nav-item"><a class="nav-link" href="ComptePersoVendeur.php">Mon compte</a></li>
				<li class="nav-item"><a class="nav-link" href="Panier.php"><img src="Img/panier.jpg" alt="Panier"
							width="30 px"></a></li>
			</ul>
		</div>
	</nav>

	<section class="page-header header container-fluid">
		<div>
			<?php if(connecter()): ?>
				<a href="DeconnexionVendeur.php" >Se déconnecter</a>
			<?php endif ?>
		</div>
		<br>
		<div class="Profil">
			<div>
				<h2 class="titreCompte">Informations personnelles vendeur</h2>
			</div><br>
			<div class="fond">
				<img src="Img/photodecouverture.jpg">
			</div>
			
			<div class="infoF">
				<form>
					<label class="Fond" for="Image">Vous voulez changer de fond ? Choisissez votre image !</label>
					<input type="file" class="monFond" name="Image" id="Fond" accept="image/png, image/jpeg">
				</form>
			</div>
			<br>
			<div class="pp">
				<img src="Img/photodeprofil1.jpg" width="100px">
			</div>
			<br>
			<div class="infosP">
				<div class="infoP">
					<div>Nom : Nouri</div>
					<div>Prénom : Elias</div>
					<div>Pseudo : Elias_nri</div>
				</div>
				<div class="infoP">
					<div>Adresse électronique : eliasnouri6@gmail.com</div>
				</div>
				<br>
				<div class="infoP">
					Vous souhaitez mettre un article en ligne? <a href="MiseEnVente.php" class="mev">Cliquez ici</a>
				</div>
				<br>
				<div class="infoP">
					Vos derniers articles mis en ligne : <br><br>
				</div>
			</div>
			
		</div>
		<br>
	</section>

	<?php require 'footer.php'; ?>