<?php require 'header.php'; ?>

	<section class="page-header header container-fluid">
		<script type="text/javascript">
	/*$(document).ready(function(){
		$('.header').height($(window).height());
    	});*/
	</script>
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
				<a href="ajouterpanier.php?id=<?= $produit->id; ?>"> <img src="panier.jpg" alt="Panier" width="40px"> </a>
			</div>
		</div>
        <?php endforeach ?>
    </section>

    <?php require 'footer.php'; ?>