<?php

$ObjetPDO = new PDO('mysql:host=localhost;dbname=projet_web','root','');

$PDOStat = $ObjetPDO->prepare('INSERT INTO produit(Nom, Description, Prix, Categorie, TypeVente) VALUES (:nom, :description, :prix, :categorie, :typevente)');

$PDOStat->bindValue('nom',$_POST['NomA'], PDO::PARAM_STR);
$PDOStat->bindValue('description',$_POST['Description'], PDO::PARAM_STR);
$PDOStat->bindValue('prix',$_POST['Prix'], PDO::PARAM_STR);
$PDOStat->bindValue('categorie',$_POST['myCategory'], PDO::PARAM_STR);
$PDOStat->bindValue('typevente',$_POST['myCategory1'], PDO::PARAM_STR);

$IsOk = $PDOStat->execute();

if($IsOk==1){
    die('tout va bien');
    header('Location: Accueil.php');
   
}
else {
    die('tout va mal');
    header('Location: InscriptionAcheteur.php');
}

?>
