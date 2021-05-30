<?php require 'header.php'; ?>

<!DOCTYPE html>
<html>

<head>
	<title>Meilleure Offre</title>
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
				<li class="nav-item"><a class="nav-link" href="ChoixConnectionCompte.php">Mon compte</a></li>
				<li class="nav-item"><a class="nav-link" href="Panier.php"><img src="panier.jpg" alt="Panier"
							width="30 px"></a></li>
			</ul>
		</div>
	</nav>
	<section class="page-header header container-fluid">
		<br>
		<h1 class="titre">Les Meilleures offres</h1>
		<?php $produit = $DB->query('SELECT * FROM produit WHERE TypeVente = "Enchere" '); ?>
		<?php foreach ($produit as $key => $produit): ?>
		<div class="pListeMO">
			<div class="pInformationsMO">
				<div class="pImageMO">
					<p><img src="Img/<?= $produit->Id_Item;?>.jpg" width="140px"></p>
				</div>
				<div class="pInformationsMOI">
					<h5><?= $produit->Nom ?></h5>
					<p><?= $produit->Description ?></p>
				</div>
				<br>
			</div>
			<br>
			<div class="pinformationsM">
				<div class="pInformationsMI">
					<p>Enchère de base : <?= number_format($produit->Prix,2,',',''); ?>€</p>
				</div>
				<br>
				<input type="number" class="myEnchere" name="enchère" id="enchere" placeholder="Votre enchère:" />
				<input type="submit" class="Bouton1" value="Enchérir" />
			</div>
			<br>
		</div>
		<br>
		<?php endforeach ?>
		
	</section>

	<?php require 'footer.php'; ?>