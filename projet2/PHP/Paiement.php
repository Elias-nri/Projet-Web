<!DOCTYPE html>
<html>
<head>
	<title>Paiement</title>
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

		<div class="All">
			<form action="InfoPaiement.class.php" method="post">
			<div class="InfoLivraison">
				<h1>Informations de livraison</h1>
            	<label class="InfoLivraison1" for="myName">Nom : </label><br>
				<input type="text" class="myLivraison1" name="myName" id="myName" required autofocus/><br>
				<label class="InfoLivraison1" for="myFirstName">Prénom : </label><br>
				<input type="text" class="myLivraison1" name="myFirstName" id="myFirstName" required/>
        		<br>
            	<label class="InfoLivraison1" for="myAdress">Adresse : </label><br>
				<input type="text" class="myLivraison1" name="myAdress1" id="myAdress1" required/><br>
				<label class="InfoLivraison1" for="myAdress1">Complement d'adresse : </label><br>
				<input type="text" class="myLivraison1" name="myAdress2" id="myAdress2" /><br>
        		<label class="InfoLivraison1" for="myCity">Ville : </label><br>
				<input type="text" class="myLivraison1" name="myCity" id="myCity" required/><br>
				<label class="InfoLivraison1" for="myPostal">Code Postal: </label><br>
				<input type="number" class="myLivraison1" name="myPostal" id="myPostal" required/>
        		<br>
        		<label class="InfoLivraison1" for="myCountry">Pays : </label><br>
				<select class="myLivraison1" name="myCountry" id="myCountry" required>
            		<option value="default" selected>Selectionner un Pays</option>
            		<option value="Allemagne" >Allemagne</option>
					<option value="Angleterre" >Angleterre</option>
					<option value="Belgique" >Belgique</option>
					<option value="Espagne" >Espagne</option>
					<option value="France" >France</option>
					<option value="Italie" >Italie</option>
					<option value="Luxembourg" >Luxembourg</option>
					<option value="Suisse" >Suisse</option>
				</select> 
				<br>
				<label class="InfoLivraison1" for="myNum">Téléphone : </label><br>
				<input type="tel" class="myLivraison1" name="myNum" id="myNum" required/>
				<br><br>	
				
			</div>

			<div class="InfoPaiement">
				
				<h1>Informations de Paiement</h1>
				
				<label class="InfoPaiement1" for="myTypeCarte">Type de Paiement : </label> <br>
				<input type="radio" class="myTypeCarte" value="Visa" name="Carte" id="Visa" />
				<label for="Visa"><img src="Img/Visa.png" alt="Visa" width="50px" ></label>
				<input type="radio" class="myTypeCarte" value="MasterCard" name="Carte" id="MasterCard" />
				<label for="MasterCard"><img src="Img/Mastercard.png" alt="MasterCard" width="50px" ></label>
				<input type="radio" class="myTypeCarte" value="AmericanExpress" name="Carte" id="AmericanExpress" />
				<label for="AmericanExpress"><img src="Img/AmericanExpress.png" alt="AmericanExpress" width="50px" ></label>
				<input type="radio" class="myTypeCarte" value="Paypal" name="Carte" id="Paypal" />
				<label for="Paypal"><img src="Img/Paypal.png" alt="Paypal" width="50px" ></label>
				<br><br>
					
				<label class="InfoPaiement1" for="myNumCarte">Numéro de la carte : </label><br>
				<input type="text" class="myPaiement" name="myNumCarte" id="myNumCarte" required/>
				<br><br>
				<label class="InfoPaiement1" for="myNameC">Nom sur la carte : </label><br>
				<input type="text" class="myPaiement" name="myNameC" id="myNameC" required/>
				<br><br>
				<label class="InfoPaiement1" for="myDateExp">Date d'expiration : </label><br>
				<input type="date" class="myPaiement" name="myDateExp" id="myDateExp" required/>
				<br><br>
				<label class="InfoPaiement1" for="myCode">Code de sécurité : </label><br>
				<input type="text" class="myPaiement" name="myCode" id="myCode" required/>
				<br><br>
				
			</div>
			<div id="bouton">
				<input type="submit" class="Bouton5" value="Confirmer" />
				<br><br>
			</div> 
			</form>
		</div>
		<a class="nav-link" href="MiseEnVente.php">Mise en vente</a>

		 
        
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