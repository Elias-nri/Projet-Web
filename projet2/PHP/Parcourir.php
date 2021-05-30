<?php require 'header.php'; ?>

<!DOCTYPE html>
<html>

<head>
	<title>Parcourir</title>
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
				<li class="nav-item"><a class="nav-link" href="ChoixConnectionCompte.php">Mon compte</a></li>
				<li class="nav-item"><a class="nav-link" href="Panier.php"><img src="Img/panier.jpg" alt="Panier"
							width="30 px"></a></li>
			</ul>
		</div>
	</nav>
	<section class="page-header header container-fluid">

		</script>
		<br>
		<div class="myOfferLink">
			<h4>Fonctionnement d'achat</h4>
			<ul>
				<div>
					<img src="Img/meilleureOffre.png" alt="Meilleure Offre" width="40 px"><a href="MeilleureOffre.php"
						class="lien">  Meilleure Offre <br><br> </a>
				</div>
				<div>
					<img src="Img/TransactionVendeurClient.png" alt="Transaction Vendeur / Client" width="40 px"><a
						href="TransactionVendeurClient.php" class="lien">  Transaction Vendeur/Client <br><br></a>
				</div>
				<div>
					<img src="Img/acheterMtn.png" alt="Achat Immédiat" width="40 px"><a href="AchatImmediat.php"
						class="lien">  Achat immédiat <br></a>
				</div>

			</ul>
		</div>
		<br>
		<div class="myOfferLink">
			<h4>Types d'articles</h4>
			<ul>
				<div><img src="Img/objetArt.png" alt="Meuble et objet d'art" width="30 px"><a href="MeubleObjetArt.php"
						class="lien">  Meubles et objets d'art<br><br></a></div>

				<div><img src="Img/Accessoire.png" alt="Accessoires VIP" width="30 px"><a href="AccessoiresVIP.php"
						class="lien">  Accessoires VIP<br><br></a></div>

				<div><img src="Img/materielSco.png" alt="Materiel Scolaire" width="30 px"><a href="MaterielsScolaires.php"
						class="lien">  Matériels scolaires<br></a></div>

			</ul>
		</div>
		<br>




	</section>

	<?php require 'footer.php'; ?>