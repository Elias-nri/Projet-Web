<?php

$ObjetPDO = new PDO('mysql:host=localhost;dbname=projet_web','root','');

$PDOStat = $ObjetPDO->prepare('INSERT INTO acheteur(Pseudo, Email, MDP) VALUES (:pseudo, :email, :mdp)');

$PDOStat->bindValue('pseudo',$_POST['myPseudo'], PDO::PARAM_STR);
$PDOStat->bindValue('email',$_POST['myEmail'], PDO::PARAM_STR);
$PDOStat->bindValue('mdp',$_POST['myMPD1'], PDO::PARAM_STR);

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