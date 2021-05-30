<?php

$ObjetPDO = new PDO('mysql:host=localhost;dbname=projet_web','root','');

$PDOStat = $ObjetPDO->prepare('INSERT INTO infopaiement1(Nom, Prenom, Adresse1, Adresse2, Ville, CodePostal, Pays, Telephone) 
VALUES (:nom, :prenom, :adresse1, :adresse2, :ville, :codepostal, :pays, :telephone)');

$PDOStat->bindValue('nom',$_POST['myName'], PDO::PARAM_STR);
$PDOStat->bindValue('prenom',$_POST['myFirstName'], PDO::PARAM_STR);
$PDOStat->bindValue('adresse1',$_POST['myAdress1'], PDO::PARAM_STR);
$PDOStat->bindValue('adresse2',$_POST['myAdress2'], PDO::PARAM_STR);
$PDOStat->bindValue('ville',$_POST['myCity'], PDO::PARAM_STR);
$PDOStat->bindValue('codepostal',$_POST['myPostal'], PDO::PARAM_STR);
$PDOStat->bindValue('pays',$_POST['myCountry'], PDO::PARAM_STR);
$PDOStat->bindValue('telephone',$_POST['myNum'], PDO::PARAM_STR);

$IsOk = $PDOStat->execute();



$PDOStat1 = $ObjetPDO->prepare('INSERT INTO infopaiement2(TypeP, Numero, Nom, DateExp, Code) VALUES (:typep, :numero, :nom, :dateexp, :code)');

$PDOStat1->bindValue('typep',$_POST['Carte'], PDO::PARAM_STR);
$PDOStat1->bindValue('numero',$_POST['myNumCarte'], PDO::PARAM_STR);
$PDOStat1->bindValue('nom',$_POST['myNameC'], PDO::PARAM_STR);
$PDOStat1->bindValue('dateexp',$_POST['myDateExp'], PDO::PARAM_STR);
$PDOStat1->bindValue('code',$_POST['myCode'], PDO::PARAM_STR);

$IsOk1 = $PDOStat1->execute();


if(($IsOk1==1)&&($IsOk==1)){
    header('Location: ConfirmationPaiement.php');
}
else {
    die('tt');
    header('Location: Paiement.php');
}
?>
