<?php
require 'db.class.php';
require 'panier.class.php';
$DB = new DB();
$panier = new panier($DB);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Meuble et Objet d'art</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="MiseEnPage1.css">
</head>
<body>
	<nav class="navbar navbar-expand-md">
		<a class="navbar-brand" href="Accueil.html">ECE MarketPlace</a>
		<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="recherche"><input type="text" class="form-control" placeholder="Rechercher"></div>
		<div class="collapse navbar-collapse" id="main-navigation">
			<ul class="navbar-nav">
				<li class="nav-item"><a class="nav-link" href="Accueil.html">Accueil</a></li>
				<li class="nav-item"><a class="nav-link" href="Parcourir.html">Parcourir</a></li>
				<li class="nav-item"><a class="nav-link" href="Notifications.html">Notifications</a></li>
				<li class="nav-item"><a class="nav-link" href="Compte.html">Mon compte</a></li>
				<li class="nav-item"><a class="nav-link" href="Panier.php"><img src="panier.jpg" alt="Panier" width="30 px"></a></li>
			</ul>
		</div>
	</nav>