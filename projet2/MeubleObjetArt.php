<?php
require 'db.class.php';
$DB = new DB();
?><!DOCTYPE html>
<html>
<head>
	<title>Meuble et Objet d'art</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="MiseEnPage1.css">
</head>
<body>
	<nav class="navbar navbar-expand-md">
		<a class="navbar-brand" href="Accueil.html">ECE MarketPlace</a>
		<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="recherche"><input type="text" class="form-control" placeholder="Rechercher"></div>
		<div class="collapse navbar-collapse" id="main-navigation">
			<ul class="navbar-nav">
				<li class="nav-item"><a class="nav-link" href="Accueil.html">Accueil</a></li>
				<li class="nav-item"><a class="nav-link" href="Parcourir.html">Parcourir</a></li>
				<li class="nav-item"><a class="nav-link" href="Notifications.html">Notifications</a></li>
				<li class="nav-item"><a class="nav-link" href="Compte.html">Mon compte</a></li>
				<li class="nav-item"><a class="nav-link" href="Panier.html"><img src="panier.jpg" alt="Panier" width="30 px"></a></li>
			</ul>
		</div>
	</nav>
	<section class="page-header header container-fluid">
		<script type="text/javascript">
	/*$(document).ready(function(){
		$('.header').height($(window).height());
    	});*/
	</script>
		<br>
		<div class="Achat">
			<h1>Meubles et Objets d'Art</h1>
		</div>
		<div class="pListe">
			<div class="pImage">
				<p><img src="lapin.jpg" alt="statut lapin " width="98 px"></p>
			</div>
			<div class="pInformations">
				<p>Sculpture en résine dans le goût de la célèbre œuvre de Jeff Koons
					livrée avec sa boite
					Edition limitée à 500 exemplaires
					
					33cm/ 12.9 in, presque 2kg </p>
			</div>
			<div class="pQuantite">
				<p>470 euros</p>
			</div>
			<div class="pAjouterPanier">
				<p><img src="panier.jpg" alt="Panier" width="40px"></p>
			</div>
		</div>
		<br>
		<div class="pListe">
			<div class="pImage">
				<p><img src="piece.png" alt="piece" width="140 px"></p>
			</div>
			<div class="pInformations">
				<p>Monnaie ancienne en argent "15 sols - Louis XVI"</p>
			</div>
			<div class="pQuantite">
				<p>99 euros</p>
			</div>
			<div class="pAjouterPanier">
				<p><img src="panier.jpg" alt="Panier" width="40px"></p>
			</div>
		</div>
		<br>
		<div class="pListe">
			<div class="pImage">
				<p><img src="meuble.webp" alt="meuble" width="145 px"></p>
			</div>
			<div class="pInformations">
				<p>Commode 3 tiroirs, Trianon, raffinée et toute en courbe, nous avons craqué pour cette jolie commode 3 tiroirs aux finitions délicates et tellement romantiques ! </p>
			</div>
			<div class="pQuantite">
				<p>499 euros</p>
			</div>
			<div class="pAjouterPanier">
				<p><img src="panier.jpg" alt="Panier" width="40px"></p>
			</div>
		</div>
    </section>

	<div class="container features">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12">
				<h3 class="feature-title">Nos selections du jour</h3>
				<img src="cahiers.jpg" class="img-fluid">
				<p>
					Des carnets couleur pastel dans la catégorie "Matériel Scolaire" au prix de 2,60 euros.
				</p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<h3 class="feature-title">Nos selections du jour</h3>
				<img src="bague.jpg" class="img-fluid">
				<p>
				    Une bague Eternel Edelweiss en saphir dans la catégorie "Accessoires Vip" au prix de 550 euros.
			    </p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<h3 class="feature-title">Entrez en contact!</h3>
	<div class="form-group">
		<input type="text" class="form-control" placeholder="Votre nom:" name="">
	</div>
	<div class="form-group">
		<input type="email" class="form-control" placeholder="Courriel:" name="email">
	</div>
	<div class="form-group">
		<textarea class="form-control" rows="4">Vos commentaires</textarea>
	</div>
	<input type="submit" class="btn btn-secondary btn-block" value="Envoyer" name="">
			</div>
		</div>
	</div>

	<footer class="page-footer">   
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12">
					<h6 class="text-uppercase font-weight-bold">Information additionnelle</h6>
					<p>
						Merci d'avoir visité notre site, à bientôt !
					</p>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<h6 class="text-uppercase font-weight-bold">Contact</h6>
					<p>ECE MarketPlace <br>
			<a href="mailto:marketplace@ece.fr">Envoyez-nous un mail</a><br>
			Appelez-nous au: 01 02 03 04 05<br>
			Envoyez-nous une lettre au: 37 Quai de Grenelle, 75015 Paris<br>
			<p>
			</div>
		</div>
		<div class="footer-copyright text-center">&copy; 2021 Copyright | Droit d'auteur
		</div>
	</footer>
</body>
</html>