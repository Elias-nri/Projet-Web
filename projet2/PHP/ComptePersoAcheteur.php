<?php require 'header.php'; ?>

<!DOCTYPE html>
<html>

<head>
	<title>Compte Acheteur</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
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
				<li class="nav-item"><a class="nav-link" href="Panier.php"><img src="Img/panier.jpg" alt="Panier"
							width="30 px"></a></li>
			</ul>
		</div>
	</nav>
    
    <section class="page-header header container-fluid">
		<br>
		<div class="Profil">
			<div>
				<h2 class="titreCompte">Informations personnelles acheteur</h2>
			</div>
			<br>
			<div class="pp"><img src="Img/photodeprofil.jpg"></div>
			<br>
			<div class="infosP">
				<div class="infoP">
					<div>Nom : Nouri</div>
					<div>Prénom : Elias</div>
					<div>Pseudo : eliaslalimace</div>
				</div>
				<div class="infoP">
					<div>Adresse électronique : eliasnouri6@gmail.com</div>
				</div>
				<br>
				<div class="infoP">
					Vous souhaitez rechercher un article en ligne? <a href="Parcourir.html" class="mev">Cliquez ici</a>
				</div>
				<br>
				<div class="infoP">
					Vos derniers articles achetés : <br><br>
					<div class="pListe">
						<div class="pImage">
							<p><img src="bague.jpg" class="img-fluid"></p>
						</div>
						<div class="pInformations">
							<p>Une bague Eternel Edelweiss en saphir</p>
						</div>
						<div class="pQuantite">
							<p>Prix : 550€</p>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		<br>
    </section>


	<?php require 'footer.php'; ?>