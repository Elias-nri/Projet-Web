<?php require 'header.php'; ?>



	<section class="page-header header container-fluid">
		<br>
		<div class="Achat">
			<h1>Meubles et Objets d'Art</h1>
		</div>
		<?php $produit = $DB->query('SELECT * FROM produit WHERE Categorie = "Meubles et objets d’art" '); ?>
		<?php foreach ($produit as $key => $produit): ?>
			<div class="pListe">
			<div class="pImage">
				<p><img src="<?= $produit->Id_Item;?>.jpg" width="140px"></p>
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
					<img src="panier.jpg" alt="Panier" width="40px">
				</a>
			</div>
		</div>
		<br>
		<?php endforeach ?>
    </section>

<?php require 'footer.php'; ?>