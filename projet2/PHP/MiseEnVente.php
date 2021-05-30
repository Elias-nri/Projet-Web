<!DOCTYPE html>
<html>
<head>
	<title>Mise en Vente</title>
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
				<li class="nav-item"><a class="nav-link" href="ComptePersoVendeur.php">Mon compte</a></li>
				<li class="nav-item"><a class="nav-link" href="Panier.php"><img src="panier.jpg" alt="Img/Panier" width="30 px"></a></li>
			</ul>
		</div>
	</nav>
	<section class="page-header header container-fluid">
		<script type="text/javascript">
		
    	</script>
		<br>
		<div class="Vente">
            <form action="MiseEnVente.class.php" method="post">
				<h3>Ajouter un article</h3>
                <label class="Vente1" for="NomA">Nom de l'article : </label> <br>
				<input type="text" class="myVente" name="NomA" id="NomA" required/>
				<br><br>
                <label class="Vente1" for="Description">Description : </label> <br>
				<input type="text" class="myVente" name="Description" id="Description" required/>
				<br><br>
                <label class="Vente1" for="Prix">Prix: </label> <br>
				<input type="number" class="myVente" name="Prix" id="Prix" required/>
				<br><br>
                <label class="Vente1" for="myCategory">Catégorie d'article : </label><br>
			    <select class="myVente" name="myCategory" id="myCategory" required>
                    <option value="default" selected>Selectionner une catégorie</option>
                    <option value="Meubles et objets d art">Meubles et Objets d'art</option>
                    <option value="Accessoire VIP">Accessoires VIP</option>
                    <option value="Materiel scolaire">Matériels scolaires</option>
                </select> 
                <br><br>
				<label class="Vente1" for="myCategory">Catégorie de vente : </label><br>
			    <select class="myVente" name="myCategory1" id="myCategory" required>
                    <option value="default" selected>Selectionner une catégorie</option>
                    <option value="Achat Immediat">Achat Immédiat</option>
                    <option value="Enchere">Enchères</option>
                    <option value="Transaction Vendeur/Client">Transaction Vendeur/Client</option>
                </select> 
				<br><br>
                <label class="Vente1" for="Image">Selectionner une image : </label> <br>
                <input type="file" class="myVente1" name="Image" id="Image" accept="image/png, image/jpeg">
				<br><br>
				<input type="submit" class="Bouton4" value="Ajouter" />
            </form>
        </div>
		<br>
	</section>

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