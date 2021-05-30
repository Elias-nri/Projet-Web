<?php require 'header.php' ?>
<?php
if(isset($_GET['del'])) {
	$panier->del($_GET['del']);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Panier</title>
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
		<br><h1 class="titre">Panier</h1>
		<form method="post" action="panier.php">
		<?php
		$ids = array_keys($_SESSION['panier']);
		if(empty($ids)){
			$produit = array();
		}
		else {
			$produit = $DB->query('SELECT * FROM produit WHERE Id_Item IN ('.implode(',',$ids).')');
		}
		foreach($produit as $produit):
		?>
		<br>
		<div class="pListe">
			<div class="pImage">
				<p><img src="Img/<?= $produit->Id_Item;?>.jpg" width="140px"></p>
			</div>
			<div class="pInformations">
				<h5><?= $produit->Nom ?></h5>
				<p><?= $produit->Description ?></p>
			</div>
			<div class="pQuantiteP">
				<p>Quantité : 
					<input type="number" name="panier[quantite][<?= $produit->Id_Item;?>]" value="<?= $_SESSION['panier'][$produit->Id_Item]; ?>">
					<input type="submit" value="✓">   
					<p>Prix unitaire : <?= number_format($produit->Prix,2,',',''); ?>€ </p>
				</p>
			</div>
			<div class="pSupprimer">
				<a href="Panier.php?del=<?= $produit->Id_Item; ?>"><img src="Img/Poubelle.png" alt="Poubelle" width="35"></a>
			</div>
		</div>
		<?php endforeach; ?>
		<br>
		<div class="finPanier">
			<h4 class="titre">Prix total : <?= number_format($panier->total(),2,',',''); ?>€</h4>
		</div>
		<button class="boutonP"><a href="Paiement.php">Paiement</a></button>
		
		</form>
		<br>
	</section>

	<?php require 'footer.php' ?> 