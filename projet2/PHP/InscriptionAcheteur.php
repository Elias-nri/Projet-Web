<!DOCTYPE html>
<html>

<head>
	<title>Inscription Acheteur</title>
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
		<form action="InscriptionAcheteur.class.php" method="post">
			<div class="Compte2">
				<h2>Je crée mon compte acheteur</h2>

				<p>
					<label class="labelCol" for="myPseudo">Pseudo : </label><br>
					<input type="text" class="myInscription" name="myPseudo" id="myPseudo" required autofocus />
					<br><br>
					<label class="labelCol" for="myEmail">E-mail : </label><br>
					<input type="email" class="myInscription" name="myEmail" id="myEmail" required />
					<br><br>
					<label class="labelCol" for="myMPD1">Mot de passe : </label><br>
					<input type="password" class="myInscription" name="myMPD1" id="myMPD1" required />
					<br><br>
					<label class="labelCol" for="myMPD1">Vérification du mot de passe : </label><br>
					<input type="password" class="myInscription" name="myMPD2" id="myMPD2" required />
					<br><br>
					<input class="Bouton" id="" type="checkbox">
					<label for="myComments">J'accepte de recevoir par e-mail les offres et newsletter d'information de
						ECE Marketplace</label>
					<br><br>
					<input class="Bouton" id="" type="checkbox" required />
					<label for="myComments">Accepter les conditions d'utilisation</label>
					<br><br>
					<input type="submit" class="Bouton" value="Continuer" />
				</p>
			</div>
		</form>
		<br>
	</section>

	<?php require 'footer.php'; ?>