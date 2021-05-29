<?php
require 'db.class.php';
require 'panier.class.php';
$DB = new DB();
$panier = new panier($DB);

$json = array('error' => true);

if(isset($_GET['id'])) {
    $produit = $DB->query('SELECT Id_Item FROM produit WHERE Id_Item=:id', array('id' => $_GET['id']));
    if(empty($produit)) {
        $json['message'] = "Ce produit n'existe pas";
    }
    $panier->ajouter($produit[0]->Id_Item);
    $json['error'] = false;
    $json['message'] = 'Le produit a bien été ajouté à votre panier';
}
else {
    $json['message'] = "Vous n'avez pas sélectionné de produit à ajouter";
}
echo json_encode($json);
?>

   
