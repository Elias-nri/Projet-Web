<?php require 'header.php' ?>
<?php
if(isset($_GET['del'])) {
	$panier->del($_GET['del']);
}
?>

	<section class="page-header header container-fluid">
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
				<p><img src="<?= $produit->Id_Item;?>.jpg" width="140px"></p>
			</div>
			<div class="pInformations">
				<h5><?= $produit->Nom ?></h5>
				<p><?= $produit->Description ?></p>
			</div>
			<div class="pQuantite">
				<p>Quantité : 
					<input type="text" name="panier[quantite][<?= $produit->Id_Item;?>]" value="<?= $_SESSION['panier'][$produit->Id_Item]; ?>">
					<input type="submit" value="✓">   
					<?= number_format($produit->Prix,2,',',''); ?>€
				</p>
			</div>
			<div class="pSupprimer">
				<a href="Panier.php?del=<?= $produit->Id_Item; ?>"><img src="Poubelle.png" alt="Poubelle" width="35"></a>
			</div>
		</div>
		<?php endforeach; ?>
		<br>
		<button class="btn btn-outline-secondary btn-lg"><a href="Paiement.html">Paiement</a></button>
		<a href="MiseEnVente.html">Mise en vente</a>
		<br>
		<?= number_format($panier->total(),2,',',''); ?>€
		</form>
	</section>

	<?php require 'footer.php' ?> 