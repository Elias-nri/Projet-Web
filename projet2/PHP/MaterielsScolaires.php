<?php require 'header.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Matériels Scolaires</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
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
				<li class="nav-item"><a class="nav-link" href="ChoixConnectionCompte.php">Mon compte</a></li>
				<li class="nav-item"><a class="nav-link" href="Panier.php"><img src="Img/panier.jpg" alt="Panier" width="30 px"></a></li>
			</ul>
		</div>
	</nav>

	<section class="page-header header container-fluid">
		<br>
		<div class="Achat">
			<h1>Matériels Scolaires</h1>
		</div>
		<?php $produit = $DB->query('SELECT * FROM produit WHERE Categorie = "Materiel scolaire" AND TypeVente = "Achat Immediat" '); ?>
		<?php foreach ($produit as $key => $produit): ?>
		<div class="pListe">
			<div class="pImage">
            <p><img src="Img/<?= $produit->Id_Item;?>.jpg" width="140px"></p>
			</div>
			<div class="pInformations">
            <h5><?= $produit->Nom ?></h5>
				<p><?= $produit->Description ?></p>
			</div>
			<div class="pQuantite">
            <p><?= number_format($produit->Prix,2,',',''); ?>€</p>
			</div>
			<div class="pAjouterPanier">
				<a class="ajouterpanier" href="ajouterpanier.php?id=<?= $produit->Id_Item; ?>">
					<img src="Img/panier.jpg" alt="Panier" width="40px">
				</a>
			</div>
		</div>
		<br>
        <?php endforeach ?>
		<?php $produit = $DB->query('SELECT * FROM produit WHERE Categorie = "Materiel scolaire" AND TypeVente = "Enchere" '); ?>
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
		<?php $produit = $DB->query('SELECT * FROM produit WHERE Categorie = "Materiel scolaire" AND TypeVente = "Transaction Vendeur/Client" ' ); ?>
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
		<br>
    </section>

<?php require 'footer.php'; ?>