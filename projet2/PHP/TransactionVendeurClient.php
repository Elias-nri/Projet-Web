<?php require 'header.php'; ?>

<!DOCTYPE html>
<html>

<head>
	<title>Transaction Vendeur Client</title>
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
				<li class="nav-item"><a class="nav-link" href="Panier.php"><img src="Img/panier.jpg" alt="Panier"
							width="30 px"></a></li>
			</ul>
		</div>
	</nav>


	<section class="page-header header container-fluid">

		<br>
		<h1 class="titre">Proposez un prix et négociez avec le vendeur !</h1>
		<?php $produit = $DB->query('SELECT * FROM produit WHERE TypeVente = "Transaction Vendeur/Client" ' ); ?>
		<?php foreach ($produit as $key => $produit): ?>
		<div class="pListeMO">
			<div class="pinformationMO">
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
			<div class="pinformationM">
				<input type="number" class="transaction" name="transaction" id="transaction"
					placeholder="Votre prix:" />
				<input type="submit" class="Bouton1" value="Proposer" />
			</div>
		</div>
		<br>
		<?php endforeach ?>
	</section>

    <?php require 'footer.php'; ?>