<?php require 'header.php'; ?>


	<section class="page-header header container-fluid">
		<br>
		<div class="Achat">
			<h1>Accessoires VIP</h1>
		</div>
		<?php $produit = $DB->query('SELECT * FROM produit WHERE Categorie = "Accessoire VIP"'); ?>
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
				<a href="ajouterpanier.php?id=<?= $produit->Id_Item; ?>"> <img src="panier.jpg" alt="Panier" width="40px"> </a>
			</div>
		</div>
		<br>
        <?php endforeach ?>
		<br>
    </section>

    <?php require 'footer.php'; ?>